@include('layouts.master')
@include('layouts.nav')

<div class="form-group addProduct">
    <a href="/adminpage/create">Add a product</a>
</div>

@include('admin.tableAdmin')
@include('layouts.footer')
