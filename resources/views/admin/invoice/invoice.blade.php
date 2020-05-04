@extends('admin.master')
@section('content')
<section id="content_outer_wrapper">
        <div id="content_wrapper" class="card-overlay invoice-page">
          <div id="header_wrapper" class="header-md">
          </div>
          <div id="content" class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="card">
                  <header class="card-heading">
                    <h2 class="card-title">INVOICE No. 00{{$invoice->id}}</h2>
                    <small class="today"></small>
                    <ul class="card-actions icons right-top">
                      <li class="dropdown">
                        <a href="javascript:void(0)" data-toggle="dropdown">
                          <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu btn-primary dropdown-menu-right">
                          <li>
                          </li>
                          <li>
                            <a href="javascript:void(0)" onclick="javascript:window.print();"><i class="zmdi zmdi-print p-r-5"></i> <span class="p-l-5">Print Invoice</span></a>
                          </li>
                          <li>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </header>
                  <div class="card-body p-50 p-t-10 invoice">
                    <h1><img src="{{asset('public/front')}}/images/favicons.png" alt='logo' class="logo-img" /> EventReservation</h1>
                    <div class="row">
                      <div class="col-xs-6">
                        <h3>INVOICE FROM</h3>
                        <address class="address">
                          EventReservation<br>
                          1600 Amphitheatre Parkway<br>
                          Mountain View, CA 10486<br>
                          Phone: +1 888-555-0000<br>
                        </address>
                      </div>
                      <div class="col-xs-6">
                        <h3>INVOICE TO</h3>
                        <address class="address">
                         Name: {{$invoice->user->name}}<br>
                          Address: {{$invoice->user->address}}<br>
                          Phone: {{$invoice->user->mobile}}<br>
                        </address>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Function Name</th>
                            <th>No. of guest</th>
                            <th>Items</th>
                            <th>Payment</th>
                            <th>Total</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{$invoice->food->venu->name}}({{$invoice->food->venu->cost}})</td>
                            <td>
                              {{$invoice->guest}}
                            </td>
                            <td>
                            @forelse($invoice->foodtype as $ftype)
                            {{$ftype}}@if(!$loop->last),@endif
                            @empty
                            @endforelse<br>
                            @forelse($invoice->equipmenttype as $etype)
                            {{$etype}}@if(!$loop->last),@endif
                            @empty
                            @endforelse <br>
                             @forelse($invoice->decorationtype as $dtype)
                            {{$dtype}}@if(!$loop->last),@endif
                            @empty
                            @endforelse <br>
                            {{$invoice->drink?$invoice->drink->name:''}}
                            {{$invoice->drink?($invoice->drink->cost):''}}
                          </td>
                            <td>{{$invoice->payment ?? 'N/A'}}</td>
                            <td>{{$invoice->total}}</td>
                           <td><p>Start: {{$invoice->start_date}}</p><p>End: {{$invoice->end_date}}</p></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="invoice-total">
                      <div class="row">
                        <div class="col-xs-4" style="visibility: hidden;">
                          <h3>Design Lead,</h3>
                          <div class="signature">J.Kendall</div>
                        </div>
                        <div class="col-xs-7 ">
                          <span class="text-right m-t-10"><strong>TOTAL TK</strong></span>
                        </div>
                        <div class="col-xs-1">
                          <span class="total">{{$invoice->total}}</span>
                        </div>
                      </div>
                    </div>
                    <footer class="invoice-footer">
                      <div class="row">
                        <div class="col-xs-3">
                          <div class="logo">
                            <h2><img src="{{asset('public/front')}}/images/favicons.png" alt='logo' class="logo-img" /> EventReservation</h2>
                          </div>
                        </div>
                        <div class="col-xs-9">
                          <span class="text-right block contact m-t-20">Phone: +1 888-555-0000</span>
                          <span class="text-right block contact email">support@materialwrap.com</span>
                        </div>
                      </div>
                    </footer>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@include('admin.include.footer')
         
          </section>
         
        </div>

@endsection