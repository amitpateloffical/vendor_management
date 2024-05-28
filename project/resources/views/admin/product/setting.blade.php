@extends('layouts.admin')

@section('content')

<div class="content-area">
  <div class="mr-breadcrumb">
    <div class="row">
      <div class="col-lg-12">
          <h4 class="heading">{{ __('Website Contents') }}</h4>
        <ul class="links">
          <li>
            <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
          </li>
          <li>
            <a href="javascript:;">{{ __('General Settings') }}</a>
          </li>
          <li>
            <a href="{{ route('admin-gs-contents') }}">{{ __('Website Contents') }}</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="add-product-content">
    <div class="row">
      <div class="col-lg-12">
        <div class="product-description">
          <div class="body-area" id="modalEdit">
            <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
          

            @include('includes.admin.form-both')

            <div class="row justify-content-center">
              <div class="col-lg-3">
                <div class="left-area">
                  <h4 class="heading">
                      {{ __('Physical Product') }}
                  </h4>
                </div>
              </div>
              <div class="col-lg-6">
                  <div class="action-list">
                      <select class="process select email_is_type droplinks {{ $gs->is_physical == 1 ? 'drop-success' : 'drop-danger' }}">
                        <option data-val="1" value="{{route('admin-gs-product-status',[1,'is_physical'])}}" {{ $gs->is_physical == 1 ? 'selected' : '' }}>{{ __('Activated') }}</option>
                        <option data-val="0" value="{{route('admin-gs-product-status',[0,'is_physical'])}}" {{ $gs->is_physical == 0 ? 'selected' : '' }}>{{ __('Deactivated') }}</option>
                      </select>
                    </div>
              </div>
            </div>

          <div class="row justify-content-center">
              <div class="col-lg-3">
                <div class="left-area">
                  <h4 class="heading">
                      {{ __('Digital Product') }}
                  </h4>
                </div>
              </div>
              <div class="col-lg-6">
                  <div class="action-list">
                      <select class="process select email_is_type droplinks {{ $gs->is_digital == 1 ? 'drop-success' : 'drop-danger' }}">
                        <option data-val="1" value="{{route('admin-gs-product-status',[1,'is_digital'])}}" {{ $gs->is_digital == 1 ? 'selected' : '' }}>{{ __('Activated') }}</option>
                        <option data-val="0" value="{{route('admin-gs-product-status',[0,'is_digital'])}}" {{ $gs->is_digital == 0 ? 'selected' : '' }}>{{ __('Deactivated') }}</option>
                      </select>
                    </div>
              </div>
            </div>

          <div class="row justify-content-center">
              <div class="col-lg-3">
                <div class="left-area">
                  <h4 class="heading">
                      {{ __('License Product') }}
                  </h4>
                </div>
              </div>
              <div class="col-lg-6">
                  <div class="action-list">
                      <select class="process select email_is_type droplinks {{ $gs->is_license == 1 ? 'drop-success' : 'drop-danger' }}">
                        <option data-val="1" value="{{route('admin-gs-product-status',[1,'is_license'])}}" {{ $gs->is_license == 1 ? 'selected' : '' }}>{{ __('Activated') }}</option>
                        <option data-val="0" value="{{route('admin-gs-product-status',[0,'is_license'])}}" {{ $gs->is_license == 0 ? 'selected' : '' }}>{{ __('Deactivated') }}</option>
                      </select>
                    </div>
              </div>
            </div>

          <div class="row justify-content-center">
              <div class="col-lg-3">
                <div class="left-area">
                  <h4 class="heading">
                      {{ __('Affiliate Product') }}
                  </h4>
                </div>
              </div>
              <div class="col-lg-6">
                  <div class="action-list">
                      <select class="process select email_is_type droplinks {{ $gs->is_affiliate == 1 ? 'drop-success' : 'drop-danger' }}">
                        <option data-val="1" value="{{route('admin-gs-product-status',[1,'is_affiliate'])}}" {{ $gs->is_affiliate == 1 ? 'selected' : '' }}>{{ __('Activated') }}</option>
                        <option data-val="0" value="{{route('admin-gs-product-status',[0,'is_affiliate'])}}" {{ $gs->is_affiliate == 0 ? 'selected' : '' }}>{{ __('Deactivated') }}</option>
                      </select>
                    </div>
              </div>
          </div>

          <div class="row justify-content-center">
              <div class="col-lg-3">
                <div class="left-area">
                  <h4 class="heading">
                      {{ __('Bulk Upload Product') }}
                  </h4>
                </div>
              </div>
              <div class="col-lg-6">
                  <div class="action-list">
                      <select class="process select email_is_type droplinks {{ $gs->is_bulk == 1 ? 'drop-success' : 'drop-danger' }}">
                        <option data-val="1" value="{{route('admin-gs-product-status',[1,'is_bulk'])}}" {{ $gs->is_bulk == 1 ? 'selected' : '' }}>{{ __('Activated') }}</option>
                        <option data-val="0" value="{{route('admin-gs-product-status',[0,'is_bulk'])}}" {{ $gs->is_bulk == 0 ? 'selected' : '' }}>{{ __('Deactivated') }}</option>
                      </select>
                    </div>
              </div>
          </div>
            </div>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

