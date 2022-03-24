@extends('layouts.admin')

@section('content')
    <div id="page-content">
        <!-- Blank Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>Category</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="header-section">
                        <ul class="breadcrumb breadcrumb-top">
                            <li>
                                    <a class="btn btn-primary" href="{{  url('add-category') }}"><i class="fa fa-plus"></i>
                                        Create New Category</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Blank Header -->

        <!-- Get Started Block -->
        <div class="block full">
            {{-- <div class="block-title"> --}}
            {{-- <h2>Users</h2> --}}
            {{-- </div> --}}
            <div class="table-responsive">
                <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" width="10%">No</th>
                            <th class="text-center">Category</th>
                            <th class="text-center" width="18%"><i class="fa fa-flash"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categoryList as $key => $catRow)
                            <tr>
                                <td class="text-center" width="10%">{{ $key + 1 }}</td>
                                <td>{{ $catRow->category_name }}</td>
                                <td class="text-center">
                                  {{-- <a class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit"
                                            href="{{ route('units.edit', $unit->id) }}"><i class="fa fa-edit"></i></a> --}}
                                        {{-- {!! Form::open(['method' => 'DELETE', 'route' => ['units.destroy', $unit->id], 'style' => 'display:inline']) !!}
                                        {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit','class' => 'btn btn-danger btn-sm','data-toggle' => 'tooltip','title' => 'Delete','onclick' => "return confirm('Are you sure  want to delete?')"]) }}
                                        {!! Form::close() !!} --}}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {!! $roles->render() !!} --}}
            </div>
        </div>
        <!-- END Get Started Block -->
    </div>
@endsection
