<div>
<x-content-header title="List All Posts" />

    @livewire('post.create-post-modal')
    <div class="card mt-4">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#admin-create-post">
                Create new post
              </button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                            aria-describedby="example2_info">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description </th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $inx => $post)
                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">{{++ $inx}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->description}}</td>
                                    <td>
                                        <img src="{{asset($post->image)}}" style="width:100px; object-fit: contain"  alt="Post image">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                         
                        </table>
                    </div>
                </div>
             
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>
