<div class="card">
    <div class="card-body">
        <div class="media">
                            <span class="avatar avatar-xl mr-5"
                                  style="background-image: url({{ Gravatar::src(Auth::user()->email) }})"></span>
            <div class="media-body">
                <h4 class="m-0">{{ Auth::user()->name }}</h4>
                <p class="text-muted mb-0 mt-2">
                    <a href="" class="btn btn-sm btn-outline-primary" target="_blank">Advanced Plan
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
{{--<a href="https://github.com/tabler/tabler" class="btn btn-block btn-primary mb-6">
    <i class="fe fe-github mr-2"></i>Browse source code
</a>--}}

<div class="list-group list-group-transparent mb-0">
    <a href="{{ route('profile.index') }}" class="list-group-item list-group-item-action @if(\Request::route()->getName() == '') active @endif"><span
                class="icon mr-3"><i class="fe fe-shopping-cart"></i></span>My eShops</a>
    <a href="{{ route('profile.index') }}" class="list-group-item list-group-item-action  @if(\Request::route()->getName() == 'profile.index') active @endif"><span
                class="icon mr-3"><i class="fe fe-user"></i></span>My Profile</a>
    {{--<a href="" class="list-group-item list-group-item-action @if(\Request::route()->getName() == 'shop.index') active @endif"><span--}}
    {{--class="icon mr-3"><i class="fe fe-package"></i></span>Manage Subscription</a>--}}
    {{--<a href="{{ route('password.change') }}" class="list-group-item list-group-item-action @if(\Request::route()->getName() == 'password.change') active @endif"><span
                class="icon mr-3"><i class="fe fe-lock"></i></span>Change Password</a>--}}
    {{--<a href="" class="list-group-item list-group-item-action"><span--}}
    {{--class="icon mr-3"><i class="fe fe-message-square"></i></span>Messages</a>--}}
</div>