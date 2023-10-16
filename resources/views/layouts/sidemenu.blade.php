
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow menu-dark" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('dashboard') }}"><span
                        class="brand-logo">

                    </span>
                    <h2 class="brand-text">{{env('APP_URL')}}</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item {{ (url()->full()==route('dashboard')) ? 'active':''}}">
                <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
                    <i data-feather="grid"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ (url()->full()==route('users.create')) ? 'active':''}}">
                <a class="d-flex align-items-center" href="{{ route('users.create') }}">
                    <i data-feather="grid"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboard">User Add</span>
                </a>
            </li>
            <li class="nav-item {{ (url()->full()==route('withdrawalHistory')) ? 'active':''}}">
                <a class="d-flex align-items-center" href="{{ route('withdrawalHistory') }}">
                    <i data-feather="grid"></i>
                    <span class="menu-title text-truncate" data-i18n="Withdrawal History">Withdrawal History</span>
                </a>
            </li>
            <li class="nav-item {{ (url()->full()==route('withdraw.create')) ? 'active':''}}">
                <a class="d-flex align-items-center" href="{{ route('withdraw.create') }}">
                    <i data-feather="grid"></i>
                    <span class="menu-title text-truncate" data-i18n="Withdrawal">Withdrawal</span>
                </a>
            </li>

            <li class="nav-item {{ (url()->full()==route('depositHistory')) ? 'active':''}}">
                <a class="d-flex align-items-center" href="{{ route('depositHistory') }}">
                    <i data-feather="grid"></i>
                    <span class="menu-title text-truncate" data-i18n="Deposit History">Deposit History</span>
                </a>
            </li>

            <li class="nav-item {{ (url()->full()==route('deposit.create')) ? 'active':''}}">
                <a class="d-flex align-items-center" href="{{ route('deposit.create') }}">
                    <i data-feather="grid"></i>
                    <span class="menu-title text-truncate" data-i18n="Deposit ">Deposit </span>
                </a>
            </li>

        </ul>
    </div>
</div>
