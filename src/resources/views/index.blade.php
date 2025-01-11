<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="inner">
            <h1>システムへのご意見をお聞かせください</h1>
            <form action="">
                <table cellspacing="15">
                    <tr>
                        <th><label>氏名<span>※</span></label></th>
                        <td>
                            <input type="text" class="name_text" name="=name" placeholder="入力してください">
                        </td>
                    </tr>

                    <tr>
                        <th><label for="">性別<span>※</span></label></th>
                        <td>
                            <input type="radio" class="gender_radio-man" name="gender" value="man" id="man" checked>
                            <label for="man">男性</label>
                            <input type="radio" class="gender_radio-woman" name="gender" value="woman" id="woman">
                            <label for="woman">女性</label>
                        </td>
                    </tr>

                    <tr>
                        <th><label for="">年代<span>※</span></label></th>
                        <td>
                            <select class="age_select" name="age" id="">
                                <option value="" selected>選択して下さい</option>
                                <option value="">10代以下</option>
                                <option value="">20代</option>
                                <option value="">30代</option>
                                <option value="">40代</option>
                                <option value="">50代</option>
                                <option value="">60代以上</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th><label for="">メールアドレス<span>※</span></label></th>
                        <td><input class="address_email" type="email" placeholder="入力してください"></td>
                    </tr>

                    <tr>
                        <th rowspan="2"><label for="">メール送信可否</label></th>
                        <td>登録したメールアドレスにメールマガジンをお送りしてもよろしいですか？</td>
                    </tr>
                    <tr>
                        <td>
                            <input class="permission_checkbox" type="checkbox" id="submit" checked>
                            <label for="submit">送信を許可します</label>
                        </td>
                    </tr>

                    <tr>
                        <th><label for="">ご意見</label></th>
                        <td>
                            <textarea class="opinion_textarea" rows="3" cols="60" placeholder="入力してください"></textarea>
                        </td>
                    </tr>
                </table>

                <button type="submit">確認</button>

            </form>
        </div>
</body>
</main>

</html>