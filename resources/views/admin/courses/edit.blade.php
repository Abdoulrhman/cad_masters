@extends('admin.courses.parent')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- fact-area-start -->
<section class="container">
    <div class="row">
        @include('admin.layouts.menu')
        <div class="col-lg-9">

            <!-- dashboard-content-area-start -->
            <div class="tpd-content-layout">

                <div class="tp-contact-from-box">
                    <h3 class="tp-contact-from-title">Edit Course 👍🏻</h3>
                    <form id="contact-form" method="POST" action="{{ route('admin.courses.update', $course->id) }}"
                        enctype="multipart/form-data">

                        @csrf

                        <div class="tp-contact-input-form">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-input p-relative">
                                        <label>Course Name</label>
                                        <input type="text" name="name" for="name" value="{{ $course->name }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-input p-relative flex">
                                        <label for="category_id">Category</label>
                                        <select name="category_id" id="category_id" class="form-control" required>
                                            <option value="">Select a Category</option>
                                            @foreach ($courseCategories as $category)
                                            <option value="{{ $category->id }}" @if($category->id ==
                                                $course->category_id) selected @endif>
                                                {{ $category->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-input p-relative">
                                        <label>Price</label>
                                        <input type="number" name="price" value="{{ $course->price }}"
                                            class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-input p-relative">
                                        <label>Offer Price</label>
                                        <input type="number" name="price_offer" value="{{ $course->price_offer }}"
                                            class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-input p-relative">
                                        <label>Schedule Time</label>
                                        <input type="time" name="schedule_time" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-input p-relative">
                                        <label>Course Hours</label>
                                        <input type="time" name="hours" value="{{ $course->hours }}"
                                            class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-input p-relative">
                                        <label>Branch</label>
                                        <input type="text" name="branch" value="{{ $course->branch }}"
                                            class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-input p-relative">
                                        <label>Upload Course Photo</label>
                                        <input type="file" name="image" value="{{ $course->image }}"
                                            class="form-control input-lg">
                                        <input type="hidden" name="hidden_image" value="{{ $course->image }}" />
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tp-contact-input p-relative">
                                        <label>Description</label>
                                        <textarea name="description" value="{{ $course->description }}"></textarea>
                                    </div>
                                </div>
                                <div class="tp-contact-btn">
                                    <button type="submit" class="tp-btn-inner"
                                        href="{{route('admin.courses.index')}}">Save</button>
                                    <p style="display: none;" class="ajax-response text-danger mt-1 mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- dashboard-content-area-end -->

        </div>

    </div>


</section>
<!-- fact-area-end -->
