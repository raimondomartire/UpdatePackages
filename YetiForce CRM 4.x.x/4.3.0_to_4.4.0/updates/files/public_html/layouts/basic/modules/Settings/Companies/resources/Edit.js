/* {[The file is published on the basis of YetiForce Public License 3.0 that can be found in the following directory: licenses/LicenseEN.txt or yetiforce.com]} */
Settings_Vtiger_Edit_Js('Settings_Companies_Edit_Js', {}, {
	registerSubmitForm: function () {
		var form = this.getForm()
		form.on('submit', function (e) {
			e.preventDefault();
			if (form.validationEngine('validate') === true) {
				var formData = new FormData(form[0]);
				var params = {
					url: 'index.php',
					type: "POST",
					data: formData,
					processData: false,
					contentType: false
				};
				var progressIndicatorElement = jQuery.progressIndicator({
					blockInfo: {'enabled': true}
				});
				AppConnector.request(params).done(function (data) {
					progressIndicatorElement.progressIndicator({'mode': 'hide'});
					if (true == data.result.success) {
						window.location.href = data.result.url
					} else {
						Settings_Vtiger_Index_Js.showMessage({text: data.result.message});
					}
				});
			} else {
				app.formAlignmentAfterValidation(form);
			}
		})
	},
	registerEvents: function () {
		var form = this.getForm()
		if (form.length) {
			form.validationEngine(app.validationEngineOptions);
			form.find("[data-inputmask]").inputmask();
		}
		this.registerSubmitForm();
	}
})
