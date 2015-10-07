<div class="row">
                <div class="col-md-12">
                    <h2 id="tabs-examples">User management</h2>
                    <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                        <ul id="myTabs" class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Add</a></li>
                            <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">All</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab">
                                 <br/> <br/>
                                <div class="row">
                                    <div class="col-md-6">
                                       
                                            {{ Form::open(array('url' => 'addstudent', 'method' => 'post')) }}
                                            
                                            <div class="form-group">
                                                <label for="FirstName">First Name</label>
                                                <input type="text" name="data[fname]" class="form-control" id="exampleInputEmail1" placeholder="First Name" required="">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="LastName">Last Name</label>
                                                <input type="text" name="data[lname]"class="form-control" id="Lastname" placeholder="Last Name" required="">
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label for="Email">Email</label>
                                                <input type="email" name="data[email]" class="form-control" id="Email" placeholder="Email" required="">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="Address">Address</label>
                                                <textarea id="Address" name="Address"  name="data[address]" class="form-control" placeholder="Address"></textarea>
                                                
                                            </div>
                                            
                                            
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        {{ Form::close() }}


                                    </div>

                                </div>


                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledBy="profile-tab">


                            </div>

                        </div>
                    </div>

                </div>

            </div>