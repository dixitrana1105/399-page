{{-- <div class="container">
    @php
        // dd($data[9]);
        $index = 0;
    @endphp
    <h4 class="dv_fre_ask_heading">{!! $data[9]->text_details[0]->header !!}</h4>
    <div class="row">
        <div class="col-md-12">
            <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">

                <div class="panel panel-default">
                    <div role="tab" id="heading1" class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false"
                                aria-controls="collapse1" class="collapsed dv_accodion">
                                <?= htmlspecialchars($data[9]->key_value_pair[0]->key) ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" role="tabpanel" aria-labelledby="heading1" class="panel-collapse collapse">
                        <div class="panel-body dv_accodion_body">
                            <?= nl2br(htmlspecialchars($data[9]->key_value_pair[0]->value)) ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div role="tab" id="heading2" class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false"
                                aria-controls="collapse2" class="collapsed dv_accodion">
                                <?= htmlspecialchars($data[9]->key_value_pair[1]->key) ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse2" role="tabpanel" aria-labelledby="heading2" class="panel-collapse collapse">
                        <div class="panel-body dv_accodion_body">
                            <?= nl2br(htmlspecialchars($data[9]->key_value_pair[1]->value)) ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div role="tab" id="heading3" class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false"
                                aria-controls="collapse3" class="collapsed dv_accodion">
                                <?= htmlspecialchars($data[9]->key_value_pair[2]->key) ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse3" role="tabpanel" aria-labelledby="heading3" class="panel-collapse collapse">
                        <div class="panel-body dv_accodion_body">
                            <?= nl2br(htmlspecialchars($data[9]->key_value_pair[2]->value)) ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div role="tab" id="heading4" class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false"
                                aria-controls="collapse4" class="collapsed dv_accodion">
                                <?= htmlspecialchars($data[9]->key_value_pair[3]->key) ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse4" role="tabpanel" aria-labelledby="heading4" class="panel-collapse collapse">
                        <div class="panel-body dv_accodion_body">
                            <?= nl2br(htmlspecialchars($data[9]->key_value_pair[3]->value)) ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div role="tab" id="heading5" class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false"
                                aria-controls="collapse5" class="collapsed dv_accodion">
                                <?= htmlspecialchars($data[9]->key_value_pair[4]->key) ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse5" role="tabpanel" aria-labelledby="heading5" class="panel-collapse collapse">
                        <div class="panel-body dv_accodion_body">
                            <?= nl2br(htmlspecialchars($data[9]->key_value_pair[4]->value)) ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div role="tab" id="heading6" class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false"
                                aria-controls="collapse6" class="collapsed dv_accodion">
                                <?= htmlspecialchars($data[9]->key_value_pair[5]->key) ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse6" role="tabpanel" aria-labelledby="heading6" class="panel-collapse collapse">
                        <div class="panel-body dv_accodion_body">
                            <?= nl2br(htmlspecialchars($data[9]->key_value_pair[5]->value)) ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div role="tab" id="heading7" class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"
                                aria-expanded="false" aria-controls="collapse7" class="collapsed dv_accodion">
                                <?= htmlspecialchars($data[9]->key_value_pair[6]->key) ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse7" role="tabpanel" aria-labelledby="heading7" class="panel-collapse collapse">
                        <div class="panel-body dv_accodion_body">
                            <?= nl2br(htmlspecialchars($data[9]->key_value_pair[6]->value)) ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div role="tab" id="heading8" class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8"
                                aria-expanded="false" aria-controls="collapse8" class="collapsed dv_accodion">
                                <?= htmlspecialchars($data[9]->key_value_pair[7]->key) ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse8" role="tabpanel" aria-labelledby="heading8" class="panel-collapse collapse">
                        <div class="panel-body dv_accodion_body">
                            <?= nl2br(htmlspecialchars($data[9]->key_value_pair[7]->value)) ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Add Bootstrap and jQuery if they are not included already -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> --}}
