<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home Page </title>
</head>
<body>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra, ante quis tincidunt interdum, mauris metus viverra magna, id convallis ipsum orci ut odio.
        Donec auctor nisl vel nunc faucibus efficitur. Pellentesque diam metus, finibus eu porttitor nec, rutrum eu velit. Phasellus a ornare purus, id vulputate odio. Aliquam
        semper nunc magna, vitae tristique diam cursus auctor. Ut nec aliquet dolor, et luctus ante. Sed malesuada vel mi lobortis facilisis. Nulla a posuere turpis. Donec eu cursus metus,
         vehicula hendrerit purus. Nulla aliquet, massa sit amet lacinia luctus, dolor lorem egestas augue, sit amet finibus metus est eu sapien.
    </p>

    <ul>
		<?php foreach ($users as $user): ?>
            <li><?= $user->email; ?></li>
		<?php endforeach; ?>
    </ul>
</body>
</html>
