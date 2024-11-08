<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Contatti</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="px-4 py-5 mb-5 bg-light rounded-3 px-md-5">
        <div class="mb-5 text-center cvododod">
            <div class="mb-3 text-white feature bg-primary bg-gradient rounded-3"><i class="bi bi-envelope"></i></div>
            <h1 class="fw-bolder">Get in touch</h1>
            <p class="mb-0 lead fw-normal text-muted">We'd love to hear from you</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                @if (session('success'))
                    {{ session('success') }}
                @endif
                <form method="POST" action="{{ route('invia') }}">
                    @csrf
                    <div class="mb-3 form-floating">
                        <input class="form-control" type="text" required name="name" value="{{ old('name') }}"
                            placeholder="Enter your name...">
                        <label for="name">Nome</label>
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mb-3 form-floating">
                        <input class="form-control" name="email" required type="email" value="{{ old('email') }}"
                            placeholder="name@example.com">
                        <label for="email">Email</label>
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mb-3 form-floating">
                        <textarea class="form-control" name="message" type="text" placeholder="Enter your message here..."
                            style="height: 10rem">{{ old('message') }}</textarea>
                        <label for="message">Messaggio</label>
                        @error('message')
                            {{ $message }}
                        @enderror

                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
