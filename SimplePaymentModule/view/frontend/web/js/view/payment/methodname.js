/*browser:true*/
/*global define*/
define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'methodname',
                component: 'YourCompanyName_SimplePaymentModule/js/view/payment/method-renderer/methodname-method'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);