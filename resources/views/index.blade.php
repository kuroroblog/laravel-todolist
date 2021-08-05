<body>
    <div class="container">
        <div class="card">
            <h2>Todo List</h2>
            <div class="todo">
            @if (count($errors) > 0)
                <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
                </ul>
            @endif
            <form action="/todo/create" method="POST" class="flex">
                @csrf
                <input type="hidden">
                <!-- 参考 : https://qiita.com/oh_rusty_nail/items/e08f6b323d526fab3d55#%E5%85%A5%E5%8A%9B%E6%96%87%E5%AD%97%E6%95%B0%E5%88%B6%E9%99%90 -->
                <!-- 参考 : https://qiita.com/oh_rusty_nail/items/e08f6b323d526fab3d55#%E5%85%A5%E5%8A%9B%E5%BF%85%E9%A0%88 -->
                <input type="text" name="content" class="text-add" maxlength='20' required>
                <input type="submit" value="追加" class="submit-add">
            </form>
            <table>
                <tr>
                    <th>作成日</th>
                    <th>タスク名</th>
                    <th>更新</th>
                    <th>削除</th>
                </tr>
                @foreach ($contents as $content)
                    <tr>
                        <td>
                            {{$content->getCreatedAt()}}
                        </td>
                        <td>
                            <input type="text" name="text-update" class="text-update" value="{{$content->getContent()}}">
                        </td>
                        <td>更新</td>
                        <td>削除</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
