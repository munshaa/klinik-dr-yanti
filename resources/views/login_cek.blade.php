@extends('layout.main')

@section('container')
<div class="login">
                    <div class="login__content">
                        <div class="login__img">
                            <img src="img/kesehatan.svg" alt="">
                        </div>
        
                        <div class="login__forms">
                            <form action="" class="login__registre" id="login-in">
                                <h1 class="login__title">Sign In</h1>
            
                                <div class="login__box">
                                    <i class='bx bx-user login__icon'></i>
                                    <input type="text" placeholder="Username" class="login__input">
                                </div>
            
                                <div class="login__box">
                                    <i class='bx bx-lock-alt login__icon'></i>
                                    <input type="password" placeholder="Password" class="login__input">
                                </div>
                                <a href="/hal_cek" class="login__button">Sign In</a>
                            </form>
        
                        
                        </div>
                    </div>
</div>
@endsection