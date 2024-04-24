@extends('welcome')
@section('title', 'checkout')
@section('content')

<div class="checkout_body">
   <div class="container">
      <h1 class="">Check out</h1>
      <div class="row">
         <div class="col-xl-8">
            <div class="card_checkout">
               <div class="card-body">
                  <ol class="activity-checkout mb-0 px-4 mt-3">
                     <li class="checkout-item">
                        <div class="feed-item-list">
                           <div>
                              <h5 class="font-size-16 mb-1">Billing Info</h5>
                              <p class="text-muted text-truncate mb-4">Sed ut perspiciatis unde omnis iste</p>
                              <div class="mb-3">
                                 <form>
                                    <div>
                                       <div class="row">
                                          <div class="col-lg-4">
                                             <div class="mb-3">
                                                <label class="form-label" for="billing-name">Name</label>
                                                <input type="text" class="form-control" id="billing-name" placeholder="Enter name">
                                             </div>
                                          </div>
                                          <div class="col-lg-4">
                                             <div class="mb-3">
                                                <label class="form-label" for="billing-email-address">Email Address</label>
                                                <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email">
                                             </div>
                                          </div>
                                          <div class="col-lg-4">
                                             <div class="mb-3">
                                                <label class="form-label" for="billing-phone">Phone</label>
                                                <input type="text" class="form-control" id="billing-phone" placeholder="Enter Phone no.">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="mb-3">
                                          <label class="form-label" for="billing-address">Address</label>
                                          <textarea class="form-control" id="billing-address" rows="3" placeholder="Enter full address"></textarea>
                                       </div>

                                       <div class="row">
                                          <div class="col-lg-4">
                                             <div class="mb-4 mb-lg-0">
                                                <label class="form-label">Country</label>
                                                <select class="form-control form-select" title="Country">
                                                   <option value="0">Select Country</option>
                                                   <option value="AF">Afghanistan</option>
                                                   <option value="AL">Albania</option>
                                                   <option value="DZ">Algeria</option>
                                                   <option value="AS">American Samoa</option>
                                                   <option value="AD">Andorra</option>
                                                   <option value="AO">Angola</option>
                                                   <option value="AI">Anguilla</option>
                                                </select>
                                             </div>
                                          </div>

                                          <div class="col-lg-4">
                                             <div class="mb-4 mb-lg-0">
                                                <label class="form-label" for="billing-city">City</label>
                                                <input type="text" class="form-control" id="billing-city" placeholder="Enter City">
                                             </div>
                                          </div>

                                          <div class="col-lg-4">
                                             <div class="mb-0">
                                                <label class="form-label" for="zip-code">Zip / Postal code</label>
                                                <input type="text" class="form-control" id="zip-code" placeholder="Enter Postal code">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="checkout-item">
                        <div class="feed-item-list">
                           <div>
                              <h5 class="font-size-14 mb-3">Payment method :</h5>
                              <div class="row">
                                 <div class="col-lg-3 col-sm-6">
                                    <div data-bs-toggle="collapse">
                                       <label class="card-radio-label">
                                          <input type="radio" name="pay-method" id="pay-methodoption1" class="card-radio-input">
                                          <span class="card-radio py-3 text-center text-truncate">
                                             Credit / Debit Card
                                          </span>
                                       </label>
                                    </div>
                                 </div>

                                 <div class="col-lg-3 col-sm-6">
                                    <div>
                                       <label class="card-radio-label">
                                          <input type="radio" name="pay-method" id="pay-methodoption2" class="card-radio-input">
                                          <span class="card-radio py-3 text-center text-truncate">
                                             Paypal
                                          </span>
                                       </label>
                                    </div>
                                 </div>

                                 <div class="col-lg-3 col-sm-6">
                                    <div>
                                       <label class="card-radio-label">
                                          <input type="radio" name="pay-method" id="pay-methodoption3" class="card-radio-input" checked="">

                                          <span class="card-radio py-3 text-center text-truncate">
                                             <span>Cash on Delivery</span>
                                          </span>
                                       </label>
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </div>
                     </li>
                  </ol>
               </div>
            </div>

            <div class="row my-4">
               <div class="col">
                  <a href="ecommerce-products.html" class="btn btn-link text-muted">
                     <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping </a>
               </div> <!-- end col -->
               <div class="col">
                  <div class="text-end mt-2 mt-sm-0">
                     <a href="#" class="btn btn-success">
                        <i class="mdi mdi-cart-outline me-1"></i> Cart </a>
                  </div>
               </div> <!-- end col -->
            </div> <!-- end row-->
         </div>
         <div class="col-xl-4">
            <div class="card checkout-order-summary">
               <div class="card-body">
                  <div class="p-3 bg-light mb-3">
                     <h5 class="font-size-16 mb-0">Order Summary <span class="float-end ms-2">#MN0124</span></h5>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-centered mb-0 table-nowrap">
                        <thead>
                           <tr>
                              <th class="border-top-0" style="width: 110px;" scope="col">Product</th>
                              <th class="border-top-0" scope="col">Product Desc</th>
                              <th class="border-top-0" scope="col">Price</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row"><img src="https://www.bootdey.com/image/280x280/FF00FF/000000" alt="product-img" title="product-img" class="avatar-lg rounded"></th>
                              <td>
                                 <h5 class="font-size-16 text-truncate"><a href="#" class="text-dark">Waterproof Mobile Phone</a></h5>

                                 <p class="text-muted mb-0 mt-1">$ 260 x 2</p>
                              </td>
                              <td>$ 520</td>
                           </tr>
                           <tr>
                              <th scope="row"><img src="https://www.bootdey.com/image/280x280/FF00FF/000000" alt="product-img" title="product-img" class="avatar-lg rounded"></th>
                              <td>
                                 <h5 class="font-size-16 text-truncate"><a href="#" class="text-dark">Smartphone Dual Camera</a></h5>

                                 <p class="text-muted mb-0 mt-1">$ 260 x 1</p>
                              </td>
                              <td>$ 260</td>
                           </tr>
                           <tr>
                              <td colspan="2">
                                 <h5 class="font-size-14 m-0">Sub Total :</h5>
                              </td>
                              <td>
                                 $ 780
                              </td>
                           </tr>
                           <tr>
                              <td colspan="2">
                                 <h5 class="font-size-14 m-0">Discount :</h5>
                              </td>
                              <td>
                                 - $ 78
                              </td>
                           </tr>
                           <tr>
                              <td colspan="2">
                                 <h5 class="font-size-14 m-0">Estimated Tax :</h5>
                              </td>
                              <td>
                                 $ 18.20
                              </td>
                           </tr>

                           <tr class="bg-light">
                              <td colspan="2">
                                 <h5 class="font-size-14 m-0">Total:</h5>
                              </td>
                              <td>
                                 $ 745.2
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="text-end mt-2 mt-sm-0">
                     <a href="#" class="btn btn-success">Next </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end row -->
   </div>
</div>

@endsection