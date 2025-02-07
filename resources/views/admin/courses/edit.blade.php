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
                        <h3 class="tp-contact-from-title">Add New Course  👍🏻</h3>
                        <form id="contact-form" method="POST" action="{{ route('admin.courses.update', $courses->id) }}" enctype="multipart/form-data">
                            {{--{{ csrf_field() }}--}}
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="tp-contact-input-form">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-contact-input p-relative">
                                            <label>Course Name</label>
                                            <input type="text" name="name" for="name" value="{{ $courses->name }}">
                                        </div>
                                    </div>
                                   <div class="col-xl-6 col-lg-6">
                                         <div class="tp-contact-input p-relative">
                                             <label>Category</label>
                                             <input type="text" name="category_id" class="form-control input-lg">
                                         </div>
                                     </div>
                                     <div class="col-xl-6 col-lg-6">
                                         <div class="tp-contact-input p-relative">
                                             <label>Price</label>
                                             <input type="number" name="price" class="form-control input-lg">
                                         </div>
                                     </div>
                                     <div class="col-xl-6 col-lg-6">
                                         <div class="tp-contact-input p-relative">
                                             <label>Offer Price</label>
                                             <input type="number" name="price_offer" class="form-control input-lg">
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
                                             <input type="time" name="hours" class="form-control input-lg">
                                         </div>
                                     </div>
                                     <div class="col-xl-6 col-lg-6">
                                         <div class="tp-contact-input p-relative">
                                             <label>Branch</label>
                                             <input type="text" name="branch" class="form-control input-lg">
                                         </div>
                                     </div>
                                    <div class="col-xl-6 col-lg-6">--}}
                                       <div class="tp-contact-input p-relative">--}}
                                            <label>Upload Course Photo</label>--}}
                                            <input type="file" name="image" class="form-control input-lg">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">--}}
                                        <div class="tp-contact-input p-relative">--}}
                                            <label>Description</label>--}}
                                            <textarea name="description"></textarea>--}}
                                        </div>
                                    </div>
                                    <div class="tp-contact-btn">
                                        <button type="submit" class="tp-btn-inner" href="{{route('admin.courses.index')}}">Save</button>
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

