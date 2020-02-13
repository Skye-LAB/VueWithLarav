@extends('layout.app')

@section('title', 'Admin | Foody')

@section('isi')
    <div>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Employee</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Menu</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Guest</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                <div class="container">
                    <div class="row mt-4">
                        <div class="col"><button class="btn btn-primary" type="button">Button</button>
                            <div class="table-responsive">
                                <table class="table mt-4">
                                    <thead>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                    </tr>
                                    <tr>
                                        <td>Cell 3</td>
                                        <td>Cell 4</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-2">
                <p><div class="container">
                    <div class="row mt-4">
                        <div class="col"><button class="btn btn-primary" type="button">Button</button>
                            <div class="table-responsive">
                                <table class="table mt-4">
                                    <thead>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                    </tr>
                                    <tr>
                                        <td>Cell 3</td>
                                        <td>Cell 4</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div></p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-3">
                <p><div class="container">
                    <div class="row mt-4">
                        <div class="col"><button class="btn btn-primary" type="button">Button</button>
                            <div class="table-responsive">
                                <table class="table mt-4">
                                    <thead>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                    </tr>
                                    <tr>
                                        <td>Cell 3</td>
                                        <td>Cell 4</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div></p>
            </div>
        </div>
    </div>
@endsection
