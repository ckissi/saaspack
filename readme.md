# SaaS

## Spatie permissions
### Publish migrations
``` php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"```

### Publish config
``` php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"```

### Add trait to use model
First, add the Spatie\Permission\Traits\HasRoles trait to your User model(s):
``` use Illuminate\Foundation\Auth\User as Authenticatable;
    use Spatie\Permission\Traits\HasRoles;
    
    class User extends Authenticatable
    {
        use HasRoles;
    
        // ...
    }
 ```
## Spatie Activity log

[Documentation](https://docs.spatie.be/laravel-activitylog/v3)

### Publish migations
``` php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="migrations" ```

### Publish config
``` php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="config" ```

## Tabler
### Publish assets
``` php artisan vendor:publish --provider="Pingecom\Tabler\Providers\TablerServiceProvider"```

### Create authentication pages

``` php artisan make:tabler ``` 

### Add social buttons to login screen:

#### Css part
```
  <style>
         .login-or {
             position: relative;
             font-size: 16px;
             color: #aaa;
             margin-top: 10px;
             margin-bottom: 10px;
             padding-top: 10px;
             padding-bottom: 10px;
         }
         .span-or {
             display: block;
             position: absolute;
             left: 50%;
             top: -2px;
             margin-left: -25px;
             background-color: #fff;
             width: 50px;
             text-align: center;
         }
         .hr-or {
             background-color: #cdcdcd;
             height: 1px;
             margin-top: 0px !important;
             margin-bottom: 0px !important;
         }
         .btn i {
             margin-right: 5px;
             vertical-align: 0px;
         }
     </style>
```

#### HTML part
```
<div class="login-or">
    <hr class="hr-or">
    <span class="span-or">or</span>
</div>
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <a href="/redirect/facebook" class="btn btn-lg btn-primary btn-block"><i class="fa fa-facebook"></i> Facebook</a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <a href="/redirect/google" class="btn btn-lg btn-danger btn-block"><i class="fa fa-google"></i> Google</a>
    </div>
</div>
```
