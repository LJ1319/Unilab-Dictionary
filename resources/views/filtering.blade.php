<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dictionary Engine</title>
</head>
<body>
<form action="{{ route("filter") }}" method="GET">
    <input type="text" name="word" id="word">
    <select name="category" id="category">
        <option value="0">აირჩიე</option>
        @foreach($categories as $category)
            <option value={{ $category->id }}>{{ $category->name }}</option>
        @endforeach
    </select>
    <select name="sortby" id="category">
        <option value="0">აირჩიე</option>
        <option value="azASC">ანბანის ზრდადობის მიხედვით</option>
        <option value="azDESC">ანბანის კლებადობის მიხედვით</option>
        {{--<option value="popularity">პოპულარობის მიხედვით</option>--}}
        <option value="dateASC">თარიღის მზრდადობის მიხედვით</option>
        <option value="dateDESC">თარიღის კლებადობის მიხედვით</option>
    </select>
    <div class="form-group">
        <label for="A">A</label>
        <input type="checkbox" name="letter" value="A" id="A">
    </div>
    <button>გაფილტრე</button>
</form>

{{--@php print_r($collection) @endphp--}}

<table>
    <tr>
        <th>ID</th>
        <th>Word</th>
        <th>Comment</th>
        <th>Example</th>
        <th>Image</th>
        <th>Active Status</th>
        <th>Created At</th>
        <th>Category</th>
    </tr>

    @foreach($collection as $word)
        {{--@php var_dump(is_null($word->image)) @endphp--}}
        <tr>
            <td>{{ $word->id }}</td>
            <td>{{ $word->word }}</td>
            <td>{{ $word->comment !== "null" ? $word->comment : "-" }}</td>
            <td>{{ $word->example !== "null" ? $word->example : "-"  }}</td>
            <td>{{ $word->image !== "null" ? $word->image :  "-"  }}</td>
            <td>{{ $word->active !== "null" ? $word->active : "-" }}</td>
            <td>{{ $word->created_at !== "null" ? $word->created_at : "-" }}</td>
            <td>{{ implode(",", $word->categories()->get()->pluck('name')->toArray()) }}</td>
        </tr>

    @endforeach

</table>

{{ $collection->links() }}

</body>
</html>
