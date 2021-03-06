@extends('layouts.tema')
@section('content')
    <div class="content ">
        <nav class="navbar navbar-default bg-master-lighter sm-padding-10 full-width p-t-0 p-b-0" role="navigation">
            <div class="container-fluid full-width">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header text-center">
                    <button type="button" class="navbar-toggle collapsed btn btn-link no-padding" data-toggle="collapse"
                            data-target="#sub-nav">
                        <i class="pg pg-more v-align-middle"></i>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="sub-nav">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="navbar-nav col-sm-12 col-md-12  col-lg-6  ">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="http://example.com"
                                           id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="fa fa-file-text m-r-10"></i> Squarespace
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action </a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                            <div class="divider"></div>
                                            <a class="dropdown-item" href="#">One more separated link</a>
                                        </div>
                                    </li>
                                </ul>
                                <!--                   <div class="dropdown dropdown-default">
                              <button class="nav-link dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                               <i class="fa fa-file-text m-r-10"></i> Squarespace
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action </a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                                <div class="divider"></div>
                                <a class="dropdown-item" href="#">One more separated link</a>
                              </div>
                            </div> -->
                                <!--                   <ul class="nav navbar-nav block col-sm-12 col-md-12 col-lg-5">
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text m-r-10"></i> Squarespace <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                  <a href="#">Action</a>
                                  <a href="#">Another action</a></li>
                                  <a href="#">Something else here</a></li>
                                  <a href="#">Separated link</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">One more separated link</a></li>
                                </ul>
                              </li>
                            </ul> -->
                            </div>
                            <div class="col-sm-4">
                                <ul class="navbar-nav d-flex flex-row">
                                    <li class="nav-item"><a href="#">Open</a></li>
                                    <li class="nav-item"><a href="#" data-toggle="tooltip" data-placement="bottom"
                                                            title="Print"><i class="fa fa-print"></i></a></li>
                                    <li class="nav-item"><a href="#" data-toggle="tooltip" data-placement="bottom"
                                                            title="Download"><i class="fa fa-download"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="navbar-nav d-flex flex-row justify-content-sm-end">
                                    <li class="nav-item">
                                        <a href="#" class="p-r-10"><img width="25" height="25" alt="" class="icon-pdf"
                                                                        data-src-retina="img/invoice/pdf2x.png"
                                                                        data-src="img/invoice/pdf.png"
                                                                        src="img/invoice/pdf2x.png"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="p-r-10"><img width="25" height="25" alt="" class="icon-image"
                                                                        data-src-retina="img/invoice/image2x.png"
                                                                        data-src="img/invoice/image.png"
                                                                        src="img/invoice/image2x.png"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="p-r-10"><img width="25" height="25" alt="" class="icon-doc"
                                                                        data-src-retina="img/invoice/doc2x.png"
                                                                        data-src="img/invoice/doc.png"
                                                                        src="img/invoice/doc2x.png"></a>
                                    </li>
                                    <li class="nav-item"><a href="#" class="p-r-10"
                                                            onclick="$.Pages.setFullScreen(document.querySelector('html'));"><i
                                                    class="fa fa-expand"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- START CONTAINER FLUID -->
        <div class=" container    container-fixed-lg">
            <!-- START card -->
            <div class="card card-default m-t-20">
                <div class="card-block">
                    <div class="invoice padding-50 sm-padding-10">
                        <div>
                            <div class="pull-left">
                                <img width="235" height="47" alt="" class="invoice-logo"
                                     data-src-retina="img/invoice/squarespace2x.png"
                                     data-src="img/invoice/squarespace.png"
                                     src="img/invoice/squarespace2x.png">
                                <address class="m-t-10">
                                    Apple Enterprise Sales
                                    <br>(877) 412-7753.
                                    <br>
                                </address>
                            </div>
                            <div class="pull-right sm-m-t-20">
                                <h2 class="font-montserrat all-caps hint-text">Invoice</h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <br>
                        <br>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-9 col-sm-height sm-no-padding">
                                    <p class="small no-margin">Invoice to</p>
                                    <h5 class="semi-bold m-t-0">Darren Forthway</h5>
                                    <address>
                                        <strong>Pages Incoperated.</strong>
                                        <br>page.inc
                                        <br>
                                        1600 Amphitheatre Pkwy, Mountain View,<br>
                                        CA 94043, United States
                                    </address>
                                </div>
                                <div class="col-lg-3 sm-no-padding sm-p-b-20 d-flex align-items-end justify-content-between">
                                    <div>
                                        <div class="font-montserrat bold all-caps">Invoice No :</div>
                                        <div class="font-montserrat bold all-caps">Invoice date :</div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="text-right">
                                        <div class="">0047</div>
                                        <div class="">29/09/14</div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive table-invoice">
                            <table class="table m-t-50">
                                <thead>
                                <tr>
                                    <th class="">Task Description</th>
                                    <th class="text-center">Rate</th>
                                    <th class="text-center">Hours</th>
                                    <th class="text-right">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="">
                                        <p class="text-black">Character Illustration</p>
                                        <p class="small hint-text">
                                            Character Design projects from the latest top online portfolios on Behance.
                                        </p>
                                    </td>
                                    <td class="text-center">$65.00</td>
                                    <td class="text-center">84</td>
                                    <td class="text-right">$5,376.00</td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <p class="text-black">Cross Heart Charity Branding</p>
                                        <p class="small hint-text">
                                            Attempt to attach higher credibility to a new product by associating it with
                                            a well established company name
                                        </p>
                                    </td>
                                    <td class="text-center">$89.00</td>
                                    <td class="text-center">100</td>
                                    <td class="text-right">$8,900.00</td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <p class="text-black">iOs App</p>
                                        <p class="small hint-text">
                                            A video game franchise Inspired primarily by a sketch of stylized wingless -
                                            Including Branding / Graphics / Motion Picture &amp; Videos
                                        </p>
                                    </td>
                                    <td class="text-center">$100.00</td>
                                    <td class="text-center">500</td>
                                    <td class="text-right">$50,000.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div>
                            <img width="150" height="58" alt="" class="invoice-signature"
                                 data-src-retina="img/invoice/signature2x.png"
                                 data-src="img/invoice/signature.png" src="img/invoice/signature2x.png">
                            <p>Designer’s Identity</p>
                        </div>
                        <br>
                        <br>
                        <div class="p-l-15 p-r-15">
                            <div class="row b-a b-grey">
                                <div class="col-md-2 p-l-15 sm-p-t-15 clearfix sm-p-b-15 d-flex flex-column justify-content-center">
                                    <h5 class="font-montserrat all-caps small no-margin hint-text bold">Advance</h5>
                                    <h3 class="no-margin">$21,000.00</h3>
                                </div>
                                <div class="col-md-5 clearfix sm-p-b-15 d-flex flex-column justify-content-center">
                                    <h5 class="font-montserrat all-caps small no-margin hint-text bold">Discount
                                        (10%)</h5>
                                    <h3 class="no-margin">$645.00</h3>
                                </div>
                                <div class="col-md-5 text-right bg-master-darker col-sm-height padding-15 d-flex flex-column justify-content-center align-items-end">
                                    <h5 class="font-montserrat all-caps small no-margin hint-text text-white bold">
                                        Total</h5>
                                    <h1 class="no-margin text-white">$64,276.00</h1>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <p class="small hint-text">Services will be invoiced in accordance with the Service Description.
                            You must pay all undisputed invoices in full within 30 days of the invoice date, unless
                            otherwise specified under the Special Terms and Conditions. All payments must reference the
                            invoice number. Unless otherwise specified, all invoices shall be paid in the currency of
                            the invoice</p>
                        <p class="small hint-text">Insight retains the right to decline to extend credit and to require
                            that the applicable purchase price be paid prior to performance of Services based on changes
                            in insight's credit policies or your financial condition and/or payment record. Insight
                            reserves the right to charge interest of 1.5% per month or the maximum allowable by
                            applicable law, whichever is less, for any undisputed past due invoices. You are responsible
                            for all costs of collection, including reasonable attorneys' fees, for any payment default
                            on undisputed invoices. In addition, Insight may terminate all further work if payment is
                            not received in a timely manner.</p>
                        <br>
                        <hr>
                        <div>
                            <img src="img/logo.png" alt="logo" data-src="img/logo.png"
                                 data-src-retina="img/logo_2x.png" width="78" height="22">
                            <span class="m-l-70 text-black sm-pull-right">+34 346 4546 445</span>
                            <span class="m-l-40 text-black sm-pull-right">support@revox.io</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END card -->
        </div>
        <!-- END CONTAINER FLUID -->
    </div>
@stop