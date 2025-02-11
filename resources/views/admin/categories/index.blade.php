@extends('admin.categories.parent')


        <!-- fact-area-start -->
<section class="container">
   <div class="row">
      @include('admin.layouts.menu')
      <div class="col-lg-9">

         <!-- dashboard-content-area-start -->
         <div class="tpd-content-layout">

            <!-- fact-area-start -->
            <section class="tp-fact-wrapper">
               <h1 align="center" class="jumbotron" algin="center">New Courses</h1>

               <table class="table table-bordered bordered-bold table-striped text-center">
                  <thead>
                  <tr class="text-center">
                     <th>id</th>
                     <th>Category</th>
                     <th>Description</th>
                     <th>Created_at</th>
                     <th>Updated_at</th>
                     <th class="inline-block">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($courseCategories as $courseCategory)
                     <tr>
                        <td>{{$courseCategory->id}}</td>
                        <td>{{$courseCategory->name}}</td>
                        <td>{{$courseCategory->description}}</td>
                        <td>{{$courseCategory->created_at->diffForHumans()}}</td>
                        <td>{{$courseCategory->updated_at->diffForHumans()}}</td>
                        <th style="" class="inline-block">
                           <form style="text-align: center;"  action="{{route('admin.categories.destroy', $courseCategory->id)}}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <a href="{{route('admin.categories.edit', $courseCategory->id)}}" class="btn btn-warning">Edit</a>

                              <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                           </form>
                        </th>
                     </tr>
                  @endforeach
                  </tbody>
               </table>
            </section>
            <!-- fact-area-end -->

         </div>
         <!-- dashboard-content-area-end -->

      </div>

   </div>


</section>
<!-- fact-area-end -->