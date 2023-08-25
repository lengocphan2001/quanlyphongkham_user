<header id="header" class="header py-6">
    <div class="container">
        <div class="d-flex align-items-center">
            <span class="bg-contrast p-3 rounded-circle me-3">
                <img class="logo" src="{{ asset("img/logo.png") }}" />
            </span>

            <div>
                <span class="lead">{{ appName() }} - {{ appDescription() }}</span>
                <h1 class="text-contrast bold display-md-4">Documentation</h1>
            </div>
        </div>
    </div>
</header>

<x-utils.divider color="contrast" />
