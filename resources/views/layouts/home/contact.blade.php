<section class="contact-section" id="contact">
        <form>
          <h2 class="contact-header">კონტაქტი</h2>
          <div class="row">
            <div class="form-group col-sm-6 col-12">
              <input
                type="text"
                class="form-control name-input"
                placeholder="სახელი"
              />
            </div>
            <div class="form-group col-sm-6 col-12">
              <input
                type="email"
                oninvalid="this.setCustomValidity('ჩაწერეთ იმეილ მისამართი')"
                class="form-control email-input"
                placeholder="იმეილი"
              />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <input
                type="text"
                class="form-control satauri-input"
                placeholder="სათაური"
              />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <textarea
                style="resize:none;"
                placeholder="კომენტარი"
                class="textarea-input form-control"
                rows="3"
              ></textarea>
            </div>
          </div>
          <button type="submit" class="submit-btn">გაგზავნა</button>
        </form>
      </section>