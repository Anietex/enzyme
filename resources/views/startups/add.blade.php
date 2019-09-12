@extends('layouts.app')

@section('content')
    <div>
       <div class="row">
           <div class="col-md-8">
               <div class="header">
                   <div class="card">
                       <div class="card-body">
                           <h4>Join as new Startup</h4>
                       </div>
                   </div>
               </div>
               <div class="body mt-4">
                  <div class="card">
                      <div class="card-body">
                          <form>

                              <h4>About your company</h4>
                              <hr>
                              <div class="form-group">
                                  <label for="business-name">Company name</label>
                                  <input class="form-control" type="text" name="company_name">
                              </div>

                              <div class="form-group">
                                  <label for="business-name">Company address</label>
                                  <input class="form-control" type="text" name="location">
                              </div>

                              <div class="form-group">
                                  <label for="business-name">Website URL</label>
                                  <input class="form-control" type="text" name="url">
                              </div>

                              <div class="form-group">
                                  <label for="business-name">Company Tagline</label>
                                  <input class="form-control" type="text" name="tagline">
                              </div>




                              <div class="form-group">
                                  <label for="business-name">Logo</label>
                                  <input class="form-control" type="file" name="business_name">
                              </div>



                              <h4>About your product</h4>
                              <hr>

                              <div class="form-group">
                                  <label>What service or Product are you offering</label>
                                  <textarea class="form-control"></textarea>
                              </div>

                              <div class="form-group">
                                  <label for="business-name">Demo video link</label>
                                  <input class="form-control" type="text" name="business_name">
                              </div>

                              <div class="form-group">
                                  <label for="business-name">Co Founders</label>

                                  <div class="row mt-2">
                                      <div class="col-md-7">
                                          <input class="form-control" type="text" placeholder="Name">
                                      </div>
                                      <div class="col-md-5">
                                          <input class="form-control" type="text" placeholder="Email">
                                      </div>
                                  </div>

                                  <div class="row mt-2">
                                      <div class="col-md-7">
                                          <input class="form-control" type="text" placeholder="Name">
                                      </div>
                                      <div class="col-md-5">
                                          <input class="form-control" type="text" placeholder="Email">
                                      </div>
                                  </div>

                                  <div class="row mt-2">
                                      <div class="col-md-7">
                                          <input class="form-control" type="text" placeholder="Name">
                                      </div>
                                      <div class="col-md-5">
                                          <input class="form-control" type="text" placeholder="Email">
                                      </div>
                                  </div>

                                  <div class="row mt-2">
                                      <div class="col-md-7">
                                          <input class="form-control" type="text" placeholder="Name">
                                      </div>
                                      <div class="col-md-5">
                                          <input class="form-control" type="text" placeholder="Email">
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="business-name">Do you have customers who have customers who have used your services before, send them an invite to review your business</label>

                                  <div class="row mt-2">
                                      <div class="col-md-7">
                                          <input class="form-control" type="text" placeholder="Name">
                                      </div>
                                      <div class="col-md-5">
                                          <input class="form-control" type="text" placeholder="Email">
                                      </div>
                                  </div>

                                  <div class="row mt-2">
                                      <div class="col-md-7">
                                          <input class="form-control" type="text" placeholder="Name">
                                      </div>
                                      <div class="col-md-5">
                                          <input class="form-control" type="text" placeholder="Email">
                                      </div>
                                  </div>

                                  <div class="row mt-2">
                                      <div class="col-md-7">
                                          <input class="form-control" type="text" placeholder="Name">
                                      </div>
                                      <div class="col-md-5">
                                          <input class="form-control" type="text" placeholder="Email">
                                      </div>
                                  </div>

                                  <div class="row mt-2">
                                      <div class="col-md-7">
                                          <input class="form-control" type="text" placeholder="Name">
                                      </div>
                                      <div class="col-md-5">
                                          <input class="form-control" type="text" placeholder="Email">
                                      </div>
                                  </div>
                              </div>

                              <div>

                                  <h4>Funding</h4>
                                  <hr>

                                  <div class="form-group">
                                      <label for="business-name">How much do need to kick start your business</label>
                                      <input class="form-control" type="number" name="business_name">
                                  </div>

                                  <div class="text-right">
                                      <button class="btn btn-primary">
                                          Get Funding
                                      </button>
                                  </div>

                              </div>




                          </form>
                      </div>
                  </div>
               </div>
           </div>
       </div>
    </div>

@stop
