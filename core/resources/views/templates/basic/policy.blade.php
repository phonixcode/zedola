@extends($activeTemplate.'layouts.frontend')
@section('content')
<section class="pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @php echo $policy->data_values->details @endphp
            </div>
        </div>
    </div>
</section>
@endsection
