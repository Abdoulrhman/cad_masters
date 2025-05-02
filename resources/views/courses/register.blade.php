@extends('layouts.dashboard')

@section('content')
<main class="tp-contact-area pt-120 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="tp-contact-form">
                    <div class="tp-section-title text-center mb-50">
                        <h3 class="tp-title">Register for Course</h3>
                        <p>{{ $course->name }}</p>
                    </div>

                    @if(session('success'))
                    <div class="alert alert-success mb-4">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-danger mb-4">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('courses.register.submit', $course) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tp-contact-input mb-20">
                                    <input type="text" name="first_name" placeholder="Your Name *"
                                        value="{{ old('first_name') }}" required>
                                    @error('first_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tp-contact-input mb-20">
                                    <input type="email" name="email" placeholder="Email Address *"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tp-contact-input mb-20">
                                    <input type="tel" name="phone" placeholder="Mobile Number *"
                                        value="{{ old('phone') }}" required>
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="tp-contact-input mb-20">
                                    <input type="text" value="{{ $course->name }}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="tp-contact-input mb-20">
                                    <textarea name="message"
                                        placeholder="Your message (optional)">{{ old('message') }}</textarea>
                                    @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="tp-contact-btn">
                                    <button type="submit" class="tp-btn">Submit Registration</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('styles')
<style>
.tp-contact-form {
    background: #fff;
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
}

.tp-contact-input input,
.tp-contact-input textarea,
.tp-contact-input select {
    width: 100%;
    height: 50px;
    border: 1px solid #eaeaea;
    border-radius: 5px;
    padding: 0 20px;
    font-size: 15px;
    color: #666;
    transition: all 0.3s ease;
}

.tp-contact-input textarea {
    height: 150px;
    padding: 20px;
    resize: none;
}

.tp-contact-input input:focus,
.tp-contact-input textarea:focus,
.tp-contact-input select:focus {
    border-color: #5169f1;
    outline: none;
}

.tp-contact-btn {
    text-align: center;
    margin-top: 20px;
}

.tp-contact-btn .tp-btn {
    padding: 15px 40px;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}

.tp-contact-btn .tp-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(81, 105, 241, 0.3);
}

.text-danger {
    display: block;
    margin-top: 5px;
    font-size: 14px;
}

.form-label {
    color: #666;
    margin-bottom: 8px;
}
</style>
@endpush
