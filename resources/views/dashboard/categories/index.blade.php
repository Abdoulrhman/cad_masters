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
                        <h1 align="center" class="jumbotron" align="center">New Category</h1>

                        @include('partials.table', [
                        'headers' => ['id', 'name','description'],
                        'items' => $courseCategories,
                        'actions' => [
                        'edit' => 'dashboard.categories.edit',
                        'delete' => 'dashboard.categories.destroy'
                        ]
                        ])
                     </section>
                  </div>

                  @include('partials.pagination', ['items' => $courseCategories])
               </div>
            </div>
         </div>
      </section>
   </main>
@endsection
