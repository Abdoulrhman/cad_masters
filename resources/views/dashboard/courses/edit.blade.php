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
                            <h3 class="tp-contact-from-title">Edit Course 👍🏻</h3>

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

                            {{-- Edit Course Form --}}
                            <form id="contact-form" method="POST"
                                action="{{ route('dashboard.courses.update', $course->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="tp-contact-input-form">
                                    <div class="row">
                                        {{-- Course Name --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Course Name</label>
                                                <input type="text" name="name" value="{{ old('name', $course->name) }}"
                                                    class="form-control" required>
                                            </div>
                                        </div>

                                        {{-- Category Selection --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="category_id">Category</label>
                                                <select name="category_id" id="category_id" class="form-control"
                                                    required>
                                                    <option value="">Select a Category</option>
                                                    @foreach ($courseCategories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ old('category_id', $course->category_id) == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        {{-- Price --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Price</label>
                                                <input type="number" name="price"
                                                    value="{{ old('price', $course->price) }}"
                                                    class="form-control input-lg" required>
                                            </div>
                                        </div>

                                        {{-- Offer Price --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Offer Price</label>
                                                <input type="number" name="price_offer"
                                                    value="{{ old('price_offer', $course->price_offer) }}"
                                                    class="form-control input-lg">
                                            </div>
                                        </div>

                                        {{-- Schedule Time --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Schedule Time</label>
                                                <input type="time" name="schedule_time"
                                                    value="{{ old('schedule_time', $course->schedule_time) }}"
                                                    class="form-control input-lg">
                                            </div>
                                        </div>

                                        {{-- Course Hours --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Course Hours</label>
                                                <input type="time" name="hours"
                                                    value="{{ old('hours', $course->hours) }}"
                                                    class="form-control input-lg">
                                            </div>
                                        </div>

                                        {{-- Branch --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Branch</label>
                                                <input type="text" name="branch"
                                                    value="{{ old('branch', $course->branch) }}"
                                                    class="form-control input-lg">
                                            </div>
                                        </div>

                                        {{-- Upload Course Photo --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Upload Course Photo</label>
                                                <input type="file" name="image" class="form-control" accept="image/*">

                                                {{-- Show Current Image Preview if Exists --}}
                                                @if ($course->image)
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/images/' . $course->image) }}"
                                                        class="img-thumbnail" width="150">
                                                    <p>Current Image</p>
                                                </div>
                                                @endif

                                                <input type="hidden" name="hidden_image" value="{{ $course->image }}" />
                                            </div>
                                        </div>

                                        {{-- Course Description --}}
                                        <div class="col-xl-12">
                                            <div class="tp-contact-input p-relative">
                                                <label>Description</label>
                                                <textarea name="description" class="form-control"
                                                    required>{{ old('description', $course->description) }}</textarea>
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
