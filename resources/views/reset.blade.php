{{-- Form validation --}}
<style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
    }
    html {
    color: #333;
    font-size: 62.5%;
    font-family: "Open Sans", sans-serif;
    }
    .main {
    background: #f1f1f1;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    }
    .form {
    width: 360px;
    min-height: 100px;
    padding: 32px 24px;
    text-align: center;
    background: #fff;
    border-radius: 2px;
    margin: 24px;
    align-self: center;
    box-shadow: 0 2px 5px 0 rgba(51, 62, 73, 0.1);
    }
    .form .heading {
    font-size: 2rem;
    }
    .form .desc {
    text-align: center;
    color: #636d77;
    font-size: 1.6rem;
    font-weight: lighter;
    line-height: 2.4rem;
    margin-top: 16px;
    font-weight: 300;
    }

    .form-group {
    display: flex;
    margin-bottom: 16px;
    flex-direction: column;
    }

    .form-label,
    .form-message {
    text-align: left;
    }

    .form-label {
    font-weight: 700;
    padding-bottom: 6px;
    line-height: 1.8rem;
    font-size: 1.4rem;
    }

    .form-control {
    height: 40px;
    padding: 8px 12px;
    border: 1px solid #b3b3b3;
    border-radius: 3px;
    outline: none;
    font-size: 1.4rem;
    }

    .form-control:hover {
    border-color: #1dbfaf;
    }

    .form-input {
    display: flex;
    flex-direction: column;
    }

    .form-input__value {
    display: flex;
    }

    .form-input__value + .form-input__value {
    margin-top: 10px;
    }

    .form-group.invalid .form-control {
    border-color: #f33a58;
    }

    .form-group.invalid .form-message {
    color: #f33a58;
    }

    .form-message {
    font-size: 1.2rem;
    line-height: 1.6rem;
    padding: 4px 0 0;
    }

    .form-submit {
    outline: none;
    background-color: #1dbfaf;
    margin-top: 12px;
    padding: 12px 16px;
    font-weight: 600;
    color: #fff;
    border: none;
    width: 100%;
    font-size: 14px;
    border-radius: 8px;
    cursor: pointer;
    }

    .form-submit:hover {
    background-color: #1ac7b6;
    }

    .spacer {
    margin-top: 36px;
    }

</style>
{{-- Toast --}}
<style>

    /* ======= Toast message ======== */

    #toast {
    position: fixed;
    top: 32px;
    right: 32px;
    z-index: 999999;
    }

    .toast {
        display: flex;
        align-items: center;
        background-color: #fff;
        border-radius: 2px;
        padding: 20px 0;
        min-width: 400px;
        max-width: 450px;
        border-left: 4px solid;
        box-shadow: 0 5px 8px rgba(0, 0, 0, 0.08);
        transition: all linear 0.3s;
    }

    @keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(calc(100% + 32px));
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
    }

    @keyframes fadeOut {
    to {
        opacity: 0;
    }
    }

    .toast--success {
    border-color: #47d864;
    }

    .toast--success .toast__icon {
    color: #47d864;
    }

    .toast--info {
    border-color: #2f86eb;
    }

    .toast--info .toast__icon {
    color: #2f86eb;
    }

    .toast--warning {
    border-color: #ffc021;
    }

    .toast--warning .toast__icon {
    color: #ffc021;
    }

    .toast--error {
    border-color: #ff623d;
    }

    .toast--error .toast__icon {
    color: #ff623d;
    }

    .toast + .toast {
    margin-top: 24px;
    }

    .toast__icon {
    font-size: 24px;
    }

    .toast__icon,
    .toast__close {
    padding: 0 16px;
    }

    .toast__body {
    flex-grow: 1;
    }

    .toast__title {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    }

    .toast__msg {
    font-size: 14px;
    color: #888;
    margin-top: 6px;
    line-height: 1.5;
    }

    .toast__close {
    font-size: 20px;
    color: rgba(0, 0, 0, 0.3);
    cursor: pointer;
    }

</style>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.5.1-web/css/all.min.css">
    <title>Document</title>
    {{-- Validation Library --}}
    <script>
        var $ = document.querySelector.bind(document);
        var $$ = document.querySelectorAll.bind(document);
        var selectorRules = {};
        // Xử lý báo lỗi
        function validate(rule, inputElement, formGroup, errorElement) {
        var errorMessage;
        var rules = selectorRules[rule.selector];
        for (let i = 0; i < rules.length; i++) {
            switch (inputElement.type) {
            case "checkbox":
            case "radio":
                errorMessage = rules[i](
                formGroup.querySelector(rule.selector + ":checked")
                );
                break;
            default:
                errorMessage = rules[i](inputElement.value);
            }
            if (errorMessage) break;
        }
        if (errorMessage) {
            errorElement.innerText = errorMessage;
            formGroup.classList.add("invalid");
        } else {
            errorElement.innerText = "";
            formGroup.classList.remove("invalid");
        }
        // Trả về true khi input có lỗi
        return errorMessage;
        }
        function Validator(option) {
        const form = $(option.form);
        if (form) {
            // Validate all input để điều kiện thì mới cho submit
            function getParent(element, selector) {
            while (element.parentElement) {
                if (element.parentElement.matches(selector)) {
                return element.parentElement;
                }
                element = element.parentElement;
            }
            }
            var butttonSubmit = form.querySelector(option.buttonSubmitSelector);
            butttonSubmit.onclick = (e) => {
            // Chặn lại submit mặc định trình duyệt để có thể fetch API bằng JS
            e.preventDefault();
            var isInValid = true;
            var i = 0;
            var isValid = true;
            option.rules.forEach((rule) => {
                var inputElement = form.querySelector(rule.selector);
                var formGroup = getParent(inputElement, option.formGroupSelector);
                var errorElement = formGroup.querySelector(option.errorSelector);
                isInValid = validate(rule, inputElement, formGroup, errorElement);
                // chỉ cần có 1 lỗi là sẽ gán cho form lỗi ngay
                if (isInValid && i == 0) {
                isValid = false;
                i++;
                }
            });
            // Khi form nhập vào không có lỗi nào.
            if (isValid) {
                // Trả về dữ liêu người dùng
                if (typeof option.onSubmit === "function") {
                var enableInputs = form.querySelectorAll("[name]");
                var formValues = Array.from(enableInputs).reduce((values, input) => {
                    switch (input.type) {
                    case "radio":
                        values[input.name] = form.querySelector(
                        'input[name="' + input.name + '"]:checked'
                        ).value;
                        break;
                    case "checkbox":
                        if (!input.checked) {
                        // values[input.name] = "";
                        return values;
                        }
                        if (!Array.isArray(values[input.name])) values[input.name] = [];
                        values[input.name].push(input.value);
                        break;
                    case "file":
                        values[input.name] = input.files;
                        break;
                    default:
                        values[input.name] = input.value || null;
                    }
                    return values;
                }, {});
                option.onSubmit(formValues);
                } else {
                // Chỉ để validate bằng js và cho submit để dùng API bằng PHP
                console.log("Use PHP Auth");
                form.submit();
                }
            }
            };
            // Validate từng input (lắng nghe sự kiện blur, input, ...)
            option.rules.forEach((rule) => {
            // Lưu lại rule không để rule ghi đè nhau
            if (Array.isArray(selectorRules[rule.selector]))
                selectorRules[rule.selector].push(rule.test);
            else selectorRules[rule.selector] = [rule.test];

            var inputElements = form.querySelectorAll(rule.selector);
            Array.from(inputElements).forEach((inputElement) => {
                var formGroup = getParent(inputElement, option.formGroupSelector);
                var errorElement = formGroup.querySelector(option.errorSelector);
                //   Khi blur ra input
                inputElement.onblur = () => {
                validate(rule, inputElement, formGroup, errorElement);
                };
                //   Khi người dùng nhập vào input
                inputElement.oninput = () => {
                errorElement.innerText = "";
                formGroup.classList.remove("invalid");
                };
            });
            });
        }
        }

        // Kiểm tra giá trị
        Validator.isRequired = function (selector, message) {
        return {
            selector: selector,
            test: function (value) {
            return value ? undefined : message || "Vui lòng nhập trường này";
            },
        };
        };
        Validator.isEmail = (selector, message) => ({
        selector,
        test(value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value)
            ? undefined
            : message || "Trường này phải là email";
        },
        });
        Validator.minLength = (selector, min, message) => ({
        selector,
        test(value) {
            return value.length >= min
            ? undefined
            : message || `Mật khẩu ít nhất ${min} kí tự`;
        },
        });

        Validator.isConfirm = (selector, message) => ({
        selector,
        test(value) {
            return value === document.querySelector("#password").value
            ? undefined
            : message || "Giá trị không chính xác";
        },
        });

    </script>
  </head>
  <body>
    <div class="main">
      <form action="{{ route('resetPassword',['token'=> $token]) }}" method="POST" class="form" id="form-1">
        @csrf
        <h3 class="heading">Cài lại mật khẩu</h3>
        <div class="form-group">
          <label for="password" class="form-label">Mật khẩu: </label>
          <input
            id="password"
            name="password"
            type="password"
            class="form-control"
          />
          <span class="form-message"></span>
        </div>
        <div class="form-group">        
          <label for="password_confirmation" class="form-label">Nhập lại mật khẩu: </label>
          <input
            id="password_confirmation"
            name="password_confirmation"
            type="password"
            class="form-control"
          />
          <span class="form-message"></span>
        </div>
        <button class="form-submit">Cập nhật</button>
      </form>
    </div>
    <script>

        Validator({
          form: "#form-1",
          rules: [
            Validator.isRequired("#password"),
            Validator.minLength("#password",7),
            Validator.isRequired("#password_confirmation"),
            Validator.isConfirm("#password_confirmation", 'Mật khẩu không trùng khớp'),

          ],
          errorSelector: ".form-message",
          buttonSubmitSelector: ".form-submit",
        //   Muốn submit không theo API mặc định của trình duyệt
        //   onSubmit: function (data) {
        //     // fetch API
        //     console.log(data);
        //   },
          formGroupSelector: ".form-group",
        });


        // TOAST
            // Hiển thị thông báo khi đăng nhập không thành công

    </script>
  @if ($errors->any())
    <div id="toast">
        <div class="toast toast--error">
            <div class="toast__icon">
                <i class="fas fa-exclamation-circle"></i>
            </div>
            <div class="toast__body">
                <h3 class="toast__title" >Lỗi người dùng</h3>
                <p class="toast__msg">{{ $errors->all()['0'] }}</p>
            </div>
            <div class="toast__close">
                <i class="fas fa-times"></i>
            </div>
            <div class="toast__time"></div>
        </div>
    </div>
@else
{{-- Ngược lại thông báo đăng nhập thành công --}}
    @if (session('json_message'))
    <div id="toast">
        <div class="toast toast--success" >
            <div class="toast__icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="toast__body">
                <h3 class="toast__title">Thành công</h3>
                <p class="toast__msg">{{ session('json_message') }}</p>
            </div>
            <div class="toast__close">
                <i class="fas fa-times"></i>
            </div>
            <div class="toast__time"></div>
        </div>
    </div>
    @endif
@endif      
  </body>

</html>
<script>
    function toast() {
        const main = document.getElementById("toast");
        if (main) {
            const toast = document.querySelector(".toast");

            // Auto remove toast
            const autoRemoveId = setTimeout(function () {
            main.removeChild(toast);
            }, 3000 + 1000);

            // Remove toast when clicked
            toast.onclick = function (e) {
                if (e.target.closest(".toast__close")) {
                    main.removeChild(toast);
                    clearTimeout(autoRemoveId);
                }
            };
            console.log(toast);
        }
    }
    toast()
</script>
