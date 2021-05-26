@extends('layouts.app')

@section('content')

<div class="text-center">
    <h1>会社概要</h1>
</div>

<div class="footer_profile_body row">
    <table border="1" class="footer_profile_inner col-sm-6 table-sm">
        <tbody>
            <tr>
                <th class="text-center">会社名</th>
                <td>株式会社AIR Professional</td>
            </tr>
            <tr>
                <th class="text-center">設立</th>
                <td>2021年5月1日</td>
            </tr>
            <tr>
                <th class="text-center">住所</th>
                <td>〒100-0005 東京都千代田区丸の内1-1</td>
            </tr>  
            <tr>
                <th class="text-center">電話番号</th>
                <td>012-345-6789</td>
            </tr>
            <tr>
                <th class="text-center">従業員数</th>
                <td>10名</td>
            </tr>
            <tr>
                <th class="text-center">事業内容</th>
                <td>航空関連(提供事業・交流事業)</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection