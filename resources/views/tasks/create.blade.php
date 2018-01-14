@extends ('layouts.app')

@section('addTask')
    <form class="form-inline">
        <div class="form-group">
            <div class="row">
                <div class="col-xs-12">
                    <label class="sr-only" for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-xs-3">
                    <label class="sr-only" for="exampleInputPassword3">Komisija</label>
                    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-3">
                    <label class="sr-only" for="exampleInputPassword3">Statuss</label>
                    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-3">
                    <label class="sr-only" for="exampleInputPassword3">Datums</label>
                    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-3">
                    <label class="sr-only" for="exampleInputPassword3">Galvenais orgs</label>
                    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-12">
                    <label class="sr-only" for="exampleInputEmail3">Palīgi</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Sign in</button>
    </form>

@endsection