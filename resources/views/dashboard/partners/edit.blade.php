@extends('layouts.dashboard')

@section('content')
<main class="tp-dashboard-body-bg">
    <section class="tpd-main pb-75 pt-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('partials.sidebar') {{-- Sidebar --}}
                </div>
                <div class="col-lg-9">
                    <div class="tpd-content-layout">
                        <section class="tp-fact-wrapper">
                            <h3 class="tp-contact-from-title">Edit Partner 👍🏻</h3>

                            {{-- Validation Errors --}}
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            {{-- Success Message --}}
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            {{-- Edit Partner Form --}}
                            <form id="contact-form" method="POST"
                                action="{{ route('dashboard.partners.update', $partners->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="tp-contact-input-form">
                                    <div class="row">
                                        {{-- Partner Name --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Partner Name</label>
                                                <input type="text" name="name" value="{{ old('name', $partners->name) }}"
                                                    class="form-control" required>
                                            </div>
                                        </div>

                                        {{-- Upload Partner Photo --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Upload Partner Photo</label>
                                                <input type="file" name="image" class="form-control" accept="image/*">

                                                {{-- Show Current Image Preview if Exists --}}
                                                @if ($partners->image)
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/images/' . $partners->image) }}"
                                                        class="img-thumbnail" width="150">
                                                    <p>Current Image</p>
                                                </div>
                                                @endif

                                                <input type="hidden" name="hidden_image" value="{{ $partners->image }}" />
                                            </div>
                                        </div>

                                        {{-- Submit Button --}}
                                        <div class="tp-contact-btn">
                                            <button type="submit" class="btn btn-primary btn-lg">Save</button>
                                            <p style="display: none;" class="ajax-response text-danger mt-1 mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
