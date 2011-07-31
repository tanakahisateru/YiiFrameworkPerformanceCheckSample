# Setup

## Install
Put Yii framework core named as "framework" beside with app.
You can get it from http://www.yiiframework.com/ .

Pinoco view needs Pinoco-runtime and PHPTAL to be installed.

* https://github.com/tanakahisateru/pinoco
* http://phptal.org/

Get releases and put them into `pinoco/_app/lib`.

## Permission
```
chmod 777 app/assets
chmod 777 app/protected/runtime
```

## Database

Check `app/protected/config/main.php` and edit below example to fit to your
environment.

```
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yiitest',
			'emulatePrepare' => true,
			'username' => 'yiitest',
			'password' => 'yiitest',
			'charset' => 'utf8',
		),
```

And check db schema `app/protected/data/shcema.mysql.post.sql`.

# Execution

Fill sample data by post form after logged in as admin(password:admin).

Then, go `http://yourdomain/project-path/app/index.php?r=post/simpleview&id=1`.

# Notation

See `app/protected/controllers/PostController.php'.
I removed a default security filter to check pure CRUD performance.

```
	public function filters()
	{
		return array(
			// ********* REMOVED **********
			// 'accessControl', // perform access control for CRUD operations
			// ********* REMOVED **********
		);
	}
```

If you want to do something for standard Yii application, uncomment it and go
`http://yourdomain/project-path/app/index.php?r=post/view&id=1`.

