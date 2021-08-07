@extends('admin.template')

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> DASHBOARD</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg-3 col-3">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>{{$cP}}</h3>

                                        <p>Product</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="{{route('product.index')}}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-3">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>{{$cO}}</h3>

                                        <p>Order</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="{{url('admin/order/')}}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-3">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>{{$cU}}</h3>

                                        <p>User</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="{{url('admin/user/')}}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-3">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>65</h3>

                                        <p>Unique Visitors</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <!-- Main row -->
                        <div class="row">
                            <!-- Left col -->
                            <section class="col-lg-12 connectedSortable">
                                <!-- DIRECT CHAT -->
                                <div class="card direct-chat direct-chat-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Direct Chat</h3>

                                        <div class="card-tools">
                                            <span title="3 New Messages" class="badge badge-primary">3</span>
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" title="Contacts"
                                                data-widget="chat-pane-toggle">
                                                <i class="fas fa-comments"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <!-- Conversations are loaded here -->
                                        <div class="direct-chat-messages">
                                            <!-- Message. Default to the left -->
                                            <div class="direct-chat-msg">
                                                <div class="direct-chat-infos clearfix">
                                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                    <span class="direct-chat-timestamp float-right">23 Jan 2:00
                                                        pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                                    alt="message user image">
                                                <!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                    Is this template really for free? That's unbelievable!
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message to the right -->
                                            <div class="direct-chat-msg right">
                                                <div class="direct-chat-infos clearfix">
                                                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                                                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class="direct-chat-img" src="dist/img/user3-128x128.jpg"
                                                    alt="message user image">
                                                <!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                    You better believe it!
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message. Default to the left -->
                                            <div class="direct-chat-msg">
                                                <div class="direct-chat-infos clearfix">
                                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                    <span class="direct-chat-timestamp float-right">23 Jan 5:37
                                                        pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                                    alt="message user image">
                                                <!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                    Working with AdminLTE on a great new app! Wanna join?
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message to the right -->
                                            <div class="direct-chat-msg right">
                                                <div class="direct-chat-infos clearfix">
                                                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                                                    <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class="direct-chat-img" src="dist/img/user3-128x128.jpg"
                                                    alt="message user image">
                                                <!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                    I would love to.
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                        </div>
                                        <!--/.direct-chat-messages-->

                                        <!-- Contacts are loaded here -->
                                        <div class="direct-chat-contacts">
                                            <ul class="contacts-list">
                                                <li>
                                                    <a href="#">
                                                        <img class="contacts-list-img" src="dist/img/user1-128x128.jpg"
                                                            alt="User Avatar">

                                                        <div class="contacts-list-info">
                                                            <span class="contacts-list-name">
                                                                Count Dracula
                                                                <small
                                                                    class="contacts-list-date float-right">2/28/2015</small>
                                                            </span>
                                                            <span class="contacts-list-msg">How have you been? I
                                                                was...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href="#">
                                                        <img class="contacts-list-img" src="dist/img/user7-128x128.jpg"
                                                            alt="User Avatar">

                                                        <div class="contacts-list-info">
                                                            <span class="contacts-list-name">
                                                                Sarah Doe
                                                                <small
                                                                    class="contacts-list-date float-right">2/23/2015</small>
                                                            </span>
                                                            <span class="contacts-list-msg">I will be waiting
                                                                for...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href="#">
                                                        <img class="contacts-list-img" src="dist/img/user3-128x128.jpg"
                                                            alt="User Avatar">

                                                        <div class="contacts-list-info">
                                                            <span class="contacts-list-name">
                                                                Nadia Jolie
                                                                <small
                                                                    class="contacts-list-date float-right">2/20/2015</small>
                                                            </span>
                                                            <span class="contacts-list-msg">I'll call you back
                                                                at...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href="#">
                                                        <img class="contacts-list-img" src="dist/img/user5-128x128.jpg"
                                                            alt="User Avatar">

                                                        <div class="contacts-list-info">
                                                            <span class="contacts-list-name">
                                                                Nora S. Vans
                                                                <small
                                                                    class="contacts-list-date float-right">2/10/2015</small>
                                                            </span>
                                                            <span class="contacts-list-msg">Where is your new...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href="#">
                                                        <img class="contacts-list-img" src="dist/img/user6-128x128.jpg"
                                                            alt="User Avatar">

                                                        <div class="contacts-list-info">
                                                            <span class="contacts-list-name">
                                                                John K.
                                                                <small
                                                                    class="contacts-list-date float-right">1/27/2015</small>
                                                            </span>
                                                            <span class="contacts-list-msg">Can I take a look
                                                                at...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                                <li>
                                                    <a href="#">
                                                        <img class="contacts-list-img" src="dist/img/user8-128x128.jpg"
                                                            alt="User Avatar">

                                                        <div class="contacts-list-info">
                                                            <span class="contacts-list-name">
                                                                Kenneth M.
                                                                <small
                                                                    class="contacts-list-date float-right">1/4/2015</small>
                                                            </span>
                                                            <span class="contacts-list-msg">Never mind I found...</span>
                                                        </div>
                                                        <!-- /.contacts-list-info -->
                                                    </a>
                                                </li>
                                                <!-- End Contact Item -->
                                            </ul>
                                            <!-- /.contacts-list -->
                                        </div>
                                        <!-- /.direct-chat-pane -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <form action="#" method="post">
                                            <div class="input-group">
                                                <input type="text" name="message" placeholder="Type Message ..."
                                                    class="form-control">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-primary">Send</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card-footer-->
                                </div>
                                <!--/.direct-chat -->
                            </section>
                            <!-- /.Left col -->
                        </div>
                        <!-- /.row (main row) -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

@endsection