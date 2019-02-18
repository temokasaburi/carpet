<section class="contact-section" id="contact">
        <form >
          <h1 class="contact-header">კონტაქტი</h1>
          <div class="row">
            <div class="form-group col-6">
              <input type="text" class="form-control name-input" placeholder="სახელი"/>
            </div>
            <div class="form-group col-6">
              <input type="email"  oninvalid="this.setCustomValidity('ჩაწერეთ იმეილ მისამართი')" class="form-control email-input" placeholder="იმეილი"  />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <input type="text" class="form-control satauri-input"  placeholder="სათაური"/>
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