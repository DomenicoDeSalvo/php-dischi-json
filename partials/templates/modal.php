    <!-- MODAL -->
    <div class="modal fade " id="vinylModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal_background modal-content">
                <div class="modal_content py-5 text-center modal-body">
                    <img class="modal_img" :src="vinyl.poster" alt="...">
                    <h5 class="name">{{vinyl.title}}</h5>
                    <p class="author">{{vinyl.author}}</p>
                    <p class="year">{{vinyl.year}}</p>
                </div>
            </div>
        </div>
    </div>