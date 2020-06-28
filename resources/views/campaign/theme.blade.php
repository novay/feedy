@extends('layouts.app')

@section('content')
   <div class="page-main">
      @include('layouts.partials.header')
      <div class="my-3 my-md-5">
         <div class="container">
            <div class="page-header">
               <div class="avatar bg-camp d-block mr-2" id="loadSwitchDiv">
                  <i class="fe fe-mail" id="loadSwitch"></i>
               </div>
               <h2 class="page-title">
                  <span>{{ $data->name }}</span>
               </h2>
            </div>
            <div class="row">
               <div class="col-lg-2 mb-4 px-0">
                  <div class="list-group list-group-transparent mb-0">
                     <a href="{{ route('home') }}" onclick="loaderInit()" class="list-group-item list-group-item-action mb-2">
                        <span class="icon mr-3"><i class="fe fe-arrow-left"></i></span>{{ __('general.all_feedback') }}
                     </a>
                     <a href="{{ route('campaign.editor', $data->uuid) }}" onclick="loaderInit()" class="list-group-item list-group-item-action {{ request()->segment(3) == 'editor' ? 'active' : '' }}">
                        <span class="icon mr-3"><i id="editorClick" class="fe fe-edit-2"></i></span>{{ __('general.editor') }}
                     </a>
                     <a href="{{ route('campaign.responses', $data->uuid) }}" onclick="loaderInit()" class="list-group-item list-group-item-action {{ request()->segment(3) == 'responses' ? 'active' : '' }}">
                        <span class="icon mr-3"><i class="fe fe-users"></i></span>{{ __('general.responses') }}
                        <span class="pull-right">{{ $data->responses()->count() }}</span>
                     </a>
                     <a href="{{ route('campaign.integrations', $data->uuid) }}" onclick="loaderInit()" class="list-group-item list-group-item-action {{ request()->segment(3) == 'integrations' ? 'active' : '' }}">
                        <span class="icon mr-3"><i class="fe fe-code"></i></span>{{ __('general.integrations') }}
                     </a>
                     <a href="{{ route('campaign.privacy', $data->uuid) }}" onclick="loaderInit()" class="list-group-item list-group-item-action {{ request()->segment(3) == 'privacy' ? 'active' : '' }}">
                        <span class="icon mr-3"><i class="fe fe-eye"></i></span>{{ __('general.privacy') }}
                     </a>
                     <a href="{{ route('campaign.data', $data->uuid) }}" onclick="loaderInit()" class="list-group-item list-group-item-action {{ request()->segment(3) == 'data' ? 'active' : '' }}">
                        <span class="icon mr-3"><i class="fe fe-database"></i></span>{{ __('general.data_manager') }}
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="{{ route('campaign.delete', $data->uuid) }}" onclick="loaderInit()" class="list-group-item list-group-item-action text-red {{ request()->segment(3) == 'delete' ? 'active' : '' }}">
                        <span class="icon mr-3"><i class="fe fe-trash text-red"></i></span> {{ __('general.delete_feedback') }}
                     </a>
                  </div>
               </div>
               <div class="col-lg-10 order-md-1">
                  <div class="row">
                     <div class="col-12">
                        @yield('inner-content')
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   @include('layouts.partials.footer')
@stop