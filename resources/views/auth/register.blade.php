<!doctype html>
<html lang="en">
<head>
    <title>{{ trans('auth/register.title_header') }} </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid register_section">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ trans('auth/register.card_register') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                {{-- name --}}
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ trans('auth/register.name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ trans('auth/register.ex_name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- email --}}
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ trans('auth/register.email_address') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ trans('auth/register.ex_email_address') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            {{-- password --}}
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ trans('auth/register.password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ trans('auth/register.ex_password') }}" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- password-confirm --}}
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ trans('auth/register.confirm_password') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ trans('auth/register.ex_confirm_password') }}" required autocomplete="new-password">
                                </div>
                            </div>
                            {{-- birthday --}}
                            <div class="form-group row">
                                <label for="birth" class="col-md-4 col-form-label text-md-right">{{ trans('auth/register.birth') }}</label>
                                <div class="col-md-6">
                                    <input id="birth" type="date" class="form-control @error('birth') is-invalid @enderror" name="birth" value="{{ old('birth') }}" autofocus>
                                    @error('birth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- gender --}}
                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ trans('auth/register.gender') }}</label>
                                <div class="col-md-6">
                                    <div class="radio" style="padding-left:20px">
                                        <label class="radio-inline"><input id="male" type="radio" value="2" name="gender" checked required autocomplete="gender">{{ trans('auth/register.male') }}</label>
                                        <label class="radio-inline"><input id="female" type="radio" value="1" name="gender" required autocomplete="gender">{{ trans('auth/register.female') }}</label>
                                        <label class="radio-inline"><input id="nomention" type="radio" value="0" name="gender" required autocomplete="gender">{{ trans('auth/register.not_mention') }}</label>
                                    </div>
                                </div>
                            </div>
                            {{-- address --}}
                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ trans('auth/register.address') }}</label>
                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="{{ trans('auth/register.ex_address') }}" value="{{ old('address') }}" autofocus>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- phone --}}
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ trans('auth/register.phone') }}</label>
                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="{{ trans('auth/register.ex_phone') }}" value="{{ old('phone') }}" autofocus>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- btn-register --}}
                            <div class="form-group row mb-0 ">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn_register">
                                        {{ trans('auth/register.btn_register') }}
                                    </button>
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                            {{ trans('auth/register.login') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
