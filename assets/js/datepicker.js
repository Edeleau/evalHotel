import Datepicker from '../../node_modules/vanillajs-datepicker/js/Datepicker.js';
import DateRangePicker from '../../node_modules/vanillajs-datepicker/js/DateRangePicker.js';
import fr from '../../node_modules/vanillajs-datepicker/js/i18n/locales/fr.js';
console.log(fr);
Object.assign(Datepicker.locales, fr);


const elem = document.getElementById('sandbox');
const rangepicker = new DateRangePicker(elem, {
    format :'dd/mm/yyyy',
    language: 'fr',
    buttonClass: 'btn',
}); 

