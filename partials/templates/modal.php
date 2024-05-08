    <!-- MODAL -->
    <div class="modal fade " id="vinylModal" tabindex="-1" aria-labelledby="vintlModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal_background modal-content">
                <div class="modal_content text-center modal-body">
                    <img class="modal_img" :src="vinyl.poster" alt="...">
                    <h5 class="name">{{vinyl.title}}</h5>
                    <p class="author">{{vinyl.author}}</p>
                    <p class="year">{{vinyl.year}}</p>
                </div>
            </div>
        </div>
    </div>