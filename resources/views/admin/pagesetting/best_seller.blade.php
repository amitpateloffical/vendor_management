@extends('layouts.admin')
@section('content')

            <div class="content-area">
              <div class="mr-breadcrumb">
                <div class="row">
                  <div class="col-lg-12">
                      <h4 class="heading">{{ __('Right Side Banner1') }} </h4>
                      <ul class="links">
                        <li>
                          <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
                        </li>
                        <li>
                          <a href="javascript:;">{{ __('Home Page Settings') }} </a>
                        </li>
                        <li>
                          <a href="{{ route('admin-ps-best-seller') }}">{{ __('Right Side Banner1') }} </a>
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
                      <form id="geniusform" action="{{ route('admin-ps-update') }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}

                        @include('includes.admin.form-both')  

                        <div class="row justify-content-center">
                          <div class="col-lg-3">
                            <div class="left-area">
                              <h4 class="heading">
                                  {{ __('Right Side Banner') }}
                              </h4>
                            </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="action-list">
                                  <select class="process select droplinks {{ $data->is_seller_banner == 1 ? 'drop-success' : 'drop-danger' }}">
                                    <option data-val="1" value="{{route('admin-ps-status',['is_seller_banner',1])}}" {{ $data->is_seller_banner == 1 ? 'selected' : '' }}>{{ __('Activated') }}</option>
                                    <option data-val="0" value="{{route('admin-ps-status',['is_seller_banner',0])}}" {{ $data->is_seller_banner == 0 ? 'selected' : '' }}>{{ __('Deactivated') }}</option>
                                  </select>
                                </div>
                          </div>
                        </div>

                                    <div class="row">
                                      <div class="col-lg-4">
                                        <div class="left-area">
                                            <h4 class="heading"> {{ __('Top Banner Image') }} *</h4>
                                            <small>{{ __('(Preferred SIze: 285 X 410 Pixel)') }}</small>
                                        </div>
                                      </div>
                                      <div class="col-lg-7">
                                        <div class="img-upload">
                                            <div id="image-preview" class="img-preview" style="background: url({{ $data->best_seller_banner ? asset('assets/images/'.$data->best_seller_banner):asset('assets/images/noimage.png') }});">
                                                <label for="image-upload" class="img-label" id="image-label"><i class="icofont-upload-alt"></i>{{ __('Upload Image') }}</label>
                                                <input type="file" name="best_seller_banner" class="img-upload" id="image-upload">
                                              </div>

                                        </div>
                                      </div>
                                    </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Link') }} *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="best_seller_banner_link" placeholder="{{ __('Link') }}" required="" value="{{$data->best_seller_banner_link}}">
                          </div>
                        </div>




                                    <div class="row">
                                      <div class="col-lg-4">
                                        <div class="left-area">
                                            <h4 class="heading"> {{ __('Bottom Banner Image') }} *</h4>
                                            <small>{{ __('(Preferred SIze: 285 X 410 Pixel)') }}</small>
                                        </div>
                                      </div>
                                      <div class="col-lg-7">
                                        <div class="img-upload">
                                            <div id="image-preview" class="img-preview" style="background: url({{ $data->best_seller_banner1 ? asset('assets/images/'.$data->best_seller_banner1):asset('assets/images/noimage.png') }});">
                                                <label for="image-upload" class="img-label" id="image-label"><i class="icofont-upload-alt"></i>{{ __('Upload Image') }}</label>
                                                <input type="file" name="best_seller_banner1" class="img-upload" id="image-upload">
                                              </div>

                                        </div>
                                      </div>
                                    </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Link') }} *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="best_seller_banner_link1" placeholder="{{ __('Link') }}" required="" value="{{$data->best_seller_banner_link1}}">
                          </div>
                        </div>


                                    <div class="row">
                                      <div class="col-lg-4">
                                        <div class="left-area">
                                          
                                        </div>
                                      </div>
                                      <div class="col-lg-7">
                                        <button class="addProductSubmit-btn" type="submit">{{ __('Save') }}</button>
                                      </div>
                                    </div>

                      </form>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection