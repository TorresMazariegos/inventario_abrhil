@extends('layouts.app')

@section('content')

<div id="sign-in-page">
        <div id="sign-in-wrapper">
            <div id="logo-wrapper">
                <div id="logo">
                    <img src="img/Content/images/signin-logo.svg"></img>
                </div>
                <div id='banner'>
                    Sign In
                </div>
                <div id="account">
                    Don't have an account? <a href="signup.html">Sign up</a>
                </div>
            </div>
            <div id="inputs-wrapper">
            <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="k-form-field   k-form-field-error">
                            <div class="k-form-field-wrap">
                                <label for="email" {{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="k-textbox k-invalid" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="k-form-field   k-form-field-error">
                            <div class="k-form-field-wrap">    
                                <label for="password" {{ __('Password') }}</label>
                                <input id="password" type="password" class="k-textbox k-invalid" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="k-button">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
            </div>            
        </div>
        <div id="frame-wrapper">
            <div id="text-wrapper">
            <h2>How Does Kendo UI Cut Development Time?</h2>
            <h4>Kendo UI delivers everything you need to build modern, beautiful, responsive apps.</h4>
                <div id="image-wrapper">
                    <img src="img/Content/images/kendoka-waves.svg"></img>
                </div>
                </div>
        </div>
</div>
    <script>
        $(document).ready(function(){
            $("#login").kendoForm({
                grid:{
                    cols:1,
                    gutter:5
                },
                buttonsTemplate: "<button type='submit' class='k-button'> {{ __('Login') }} </button> ",
                formData:{
                    email:"",
                    password:"",
                    RememberMe:false
                },
                items: [
                    {
                        field: "email",
                        label:"",
                        attributes:{
                            placeholder: "Email",
                            required:true,
                            type: "email"
                        }
                    }, 
                    {
                        field: "password",
                        label:"",
                        attributes:{
                            type:"password",
                            required:true
                        }
                    },
                    {
                        field: "RememberMe",
                        label:"Remember Me",
                        attributes:{
                            type:"checkbox",
                            required:false
                        }
                    }
                ]
            })
            $("#password").parent().append("<span class='k-icon k-i-preview'></span>");
            //$("#password").val("somepassword");
            $(".k-i-preview").mousedown(function(){

                $("#password").attr("type", "text");
            })
            $(".k-i-preview").mouseup(function(){

                $("#password").attr("type", "password");
            })           
        })
    </script>

<style>
    body {
        margin: 0;
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
    }

    span.k-textbox {
        width: 100%;
    }

    .k-icon.k-i-preview {
        position: absolute;
        bottom: 2px;
        right: 5px;
        width: 24px;
        height: 24px;
        color:gray;
    }
    #logo-wrapper{
        height: 370px;
        width: 270px;

    }

    #logo {
        height: 186px;
        width: 270px;
    }
    #banner {
        height: 68px;
        color:#2727BE;
        font-weight: 300;
        font-size: 56px;
        display: flex;
        align-items: center;
        justify-content:center;
        margin-top:32px;
    }
    #account{
        position: relative;
        height: 20px;
        left: 31.5px;
        margin:32px 0px 32px 0px;
        font-size: 14px;

    }

    #account>a {
        margin-left: 16px;
        color:#0058E9;
    }

    #continue-with-wrapper {
        display: inline-flex;
        height: 20px;
        width: 270px;
        margin-bottom:16px;
        margin-top: 16px;

    }
    #continue-with-wrapper>span{
        position: static;
        color: #8F8F8F;       
        font-size: 14px;
        line-height: 20px;

    }
   
    hr {
        width:75px;
        height:0px;
        border: 1px solid #8F8F8F;
    }

    #sign-in-page {
        position: relative;
        height: 100vh;
        display: flex;
        background: linear-gradient(16.66deg, #070B46 45.27%, #2D2DD3 100%);
    }
    
    #sign-in-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        min-width: 560px;
        width: 39%;
        z-index: 1;
        background: #FFFFFF;
    }

    #login {
        height: 202px;
        width: 270px;
        justify-content: space-between;
        display: flex;
        flex-flow: column;

    }
    div.k-form-field:nth-child(3) {
        display: flex;
    }
    #RememberMe-form-label {
        order: 1;
        padding-left: 0.5em;
    }
    .k-form-field-wrap {
        position: relative;
    }

    .k-button, .k-button:hover {
        height: 30px;
        width: 270px;
        background:#FF6358;
        color: #FFFFFF;

    }
    #social-wrapper {
        display: flex;
        width:194px;
        height:30px; 
        top:755px;
        left:183px; 
        
    }

    .facebook {
        height: 30px;
        width: 30px;
        left: 20px;
        top: 0px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-left: 15px;
        background: rgba(66, 66, 66, 0.04);
        border-radius: 2px;

    }

    .twitter {
        height: 30px;
        width: 30px;
        left: 20px;
        top: 0px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-left: 35px;
        background: rgba(66, 66, 66, 0.04);
        border-radius: 2px;

    }
    
    .reddit{
        height: 30px;
        width: 30px;
        left: 20px;
        top: 0px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-left: 35px;
        background: rgba(66, 66, 66, 0.04);
        border-radius: 2px;

    }
    #image-wrapper {
        position: absolute;
        right: 0;
        bottom: 0;
        overflow: hidden;
        width: 61%;
    }

    #image-wrapper img {
        width: 100%;
    }

    #frame-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100vh;
        width: 61%;
        max-width: 542px;
        margin: 0 auto;

    }

    #frame-wrapper h2 {
        font-size:48px;
        color:#FFFFFF;
        font-weight: bold;
        text-align: center;
        line-height: 1.4;
    }

    #frame-wrapper h4 {
        font-size: 19px;
        text-align:center;
        color:#FFFFFF;
        font-weight: normal;
        line-height:1.3;
    }

    #wave {
        width: 100vw;
    }

   #text-wrapper {
       margin-top: 5vh;
   }
</style>


@endsection
