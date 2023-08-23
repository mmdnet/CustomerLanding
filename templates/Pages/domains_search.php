<!-- src/Template/Pages/search.ctp -->
<?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4">
                <h1 class="text-center mb-4">Domain Search</h1>
                <form id="domainSearchForm" action="/register">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="domainName" name="domainName" placeholder="Enter a Domain Name" required>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>