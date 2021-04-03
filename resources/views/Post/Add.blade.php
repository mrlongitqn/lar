<form action="/save-post" method="post">
    @csrf
    <input type="hidden" name="_token" value="{{csrf_token()}}">
   <label>Nhap id cua Category</label> <input type="number" name="category_id" />
    <input type="submit">
</form>
