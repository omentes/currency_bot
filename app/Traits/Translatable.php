<?php

namespace CurrencyUaBot\Traits;

use CurrencyUaBot\Core\App;

trait Translatable
{
    protected $translate = [
        'settings' => [
            'en' => '⚙️ Settings',
            'uk' => '⚙️ Налаштування',
            'ru' => '⚙️ Настройки',
        ],
        'language' => [
            'en' => '💬 Language',
            'uk' => '💬 Мова',
            'ru' => '💬 Язык',
        ],
        'buttons' => [
            'en' => '📱 Buttons',
            'uk' => '📱 Кнопки',
            'ru' => '📱 Кнопки',
        ],
        'source' => [
            'en' => '💸 Currency sources',
            'uk' => '💸 Джерело валют',
            'ru' => '💸 Источники валют',
        ],
        'start' => [
            'en' => '💠 Main menu',
            'uk' => '💠 Головне меню',
            'ru' => '💠 Главное меню',
        ],
        'english' => [
            'en' => '🇬🇧 English 🇬🇧',
            'uk' => '🇬🇧 English 🇬🇧',
            'ru' => '🇬🇧 English 🇬🇧',
        ],
        'ukrainian' => [
            'en' => '🇺🇦 Українська 🇺🇦',
            'uk' => '🇺🇦 Українська 🇺🇦',
            'ru' => '🇺🇦 Українська 🇺🇦',
        ],
        'russian' => [
            'en' => '🇷🇺 Русский 🇷🇺',
            'uk' => '🇷🇺 Русский 🇷🇺',
            'ru' => '🇷🇺 Русский 🇷🇺',
        ],
        'choice_lang' => [
            'en' => '🇬🇧 Choose language',
            'uk' => '🇺🇦 Виберіть мову',
            'ru' => '🇷🇺 Выберите язык',
        ],
        'language_changed' => [
            'en' => '🇬🇧 Language has been changed',
            'uk' => '🇺🇦 Мову змінено',
            'ru' => '🇷🇺 Язык изменен',
        ],
        'settings_text' => [
            'en' => '⚙️ Settings menu',
            'uk' => '⚙️ Меню налаштувань️',
            'ru' => '⚙️ Меню настроек',
        ],
        'choice_source' => [
            'en' => 'Select sources currencies:',
            'uk' => 'Вибрати джерело валют:',
            'ru' => 'Выбрать источники валют:',
        ],
        'Monobank' => [
            'en' => '🐈 Monobank',
            'uk' => '🐈 Monobank',
            'ru' => '🐈 Monobank',
        ],
        'Privatbank:cash' => [
            'en' => '🏪 Privatbank cash',
            'uk' => '🏪 Privatbank готівка',
            'ru' => '🏪 Privatbank наличные',
        ],
        'Privatbank:cards' => [
            'en' => '🏪 Privatbank cards',
            'uk' => '🏪 Privatbank карти',
            'ru' => '🏪 Privatbank карты',
        ],
        'PrivatbankOtp24' => [
            'en' => '🏪 Privatbank for business',
            'uk' => '🏪 Privatbank для бізнесу',
            'ru' => '🏪 Privatbank для бизнеса',
        ],
        'NBU' => [
            'en' => '🇺🇦 National Bank',
            'uk' => '🇺🇦 Нацбанк',
            'ru' => '🇺🇦 Нацбанк',
        ],
        'Minfin:megbank' => [
            'en' => '🏦 Minfin Interbank',
            'uk' => '🏦 Minfin межбанк',
            'ru' => '🏦 Minfin межбанк',
        ],
        'remove_api' => [
            'en' => '💔 Source removed',
            'uk' => '💔 Джерело видалено',
            'ru' => '💔 Источник удален',
        ],
        'remove_api_denied' => [
            'en' => '❌ Can not delete last data source',
            'uk' => '❌ Не можна видалити останнє джерело даних',
            'ru' => '❌ Нельзя удалить последний источник данных',
        ],
        'add_api' => [
            'en' => '✅ Source added',
            'uk' => '✅ Джерело додано',
            'ru' => '✅ Источник добавлен',
        ],
        'help' => [
            'en' => '💭 Help',
            'uk' => '💭 Допомога',
            'ru' => '💭 Помощь',
        ],
        'help_functionality' => [
            'en' => 'Help functionality',
            'uk' => 'Допомога functionality',
            'ru' => 'Помощь functionality',
        ],
        'help_source' => [
            'en' => 'Help inline',
            'uk' => 'Допомога inline',
            'ru' => 'Помощь inline',
        ],
        'help_buttons' => [
            'en' => 'Help buttons',
            'uk' => 'Допомога buttons',
            'ru' => 'Помощь buttons',
        ],
        'buttonsadd' => [
            'en' => '↩️ Add button',
            'uk' => '↩️ Додати кнопку',
            'ru' => '↩️ Добавить кнопку',
        ],
        'button_add_error' => [
            'en' => '❌ Error adding button ',
            'uk' => '❌ Помилка додавання кнопки ',
            'ru' => '❌ Ошибка добавления кнопки ',
        ],
        'button_del_error' => [
            'en' => '❌ Error removing button ',
            'uk' => '❌ Помилка видалення кнопки ',
            'ru' => '❌ Ошибка удаления кнопки ',
        ],
        'buttons_description' => [
            'en' => "To add a button, use the command:\n/buttonsadd EUR\nTo remove a button, use the command:\n/buttonsdel EUR\nWhere EUR is a currency code.\nYour buttons now:\n",
            'uk' => "Щоб додати кнопку, скористайтеся командою:\n/buttonsadd EUR\nЩоб видалити кнопку, скористайтеся командою:\n/buttonsdel EUR\nДе EUR це код валюти.\nВаши кнопки зараз:\n",
            'ru' => "Чтобы добавить кнопку, используйте команду:\n/buttonsadd EUR\nЧтобы удалить кнопку, используйте команду:\n/buttonsdel EUR\nГде EUR это код валюты.\nВаши кнопки сейчас:\n",
        ],
        'button_add_success' => [
            'en' => '✅ Button added',
            'uk' => '✅ Кнопка додана',
            'ru' => '✅ Кнопка добавлена',
        ],
        'button_del_success' => [
            'en' => '✅ Button removed',
            'uk' => '✅ Кнопка видалена',
            'ru' => '✅ Кнопка удалена',
        ],
        'buttonsremove' => [
            'en' => '↪️ Remove button',
            'uk' => '↪️ Видалити кнопку',
            'ru' => '↪️ Удалить кнопку',
        ],
        'buttonsreset' => [
            'en' => '🔄 Reset buttons',
            'uk' => '🔄 Скинути кнопки',
            'ru' => '🔄 Сбросить кнопки',
        ],
        'example' => [
            'en' => 'Example',
            'uk' => 'Приклад',
            'ru' => 'Пример',
        ],
        'buy' => [
            'en' => 'buy',
            'uk' => 'купити',
            'ru' => 'купить',
        ],
        'sell' => [
            'en' => 'sell',
            'uk' => 'продати',
            'ru' => 'продать',
        ],
//        'donat' => [
//            'en' => "",
//            'uk' => "",
//            'ru' => "",
//        ],
        'donat' => [
            'en' => "<a href=\"https://monobank.ua/r/ffYN\">Get a Monobank Credit Card</a><br><br>Learn English Words @RepeatWordBot",
            'uk' => "<a href=\"https://monobank.ua/r/ffYN\">Отримати кредитну карту Монобанка</a><br><br>Вчити англійські слова@RepeatWordBot",
            'ru' => "<a href=\"https://monobank.ua/r/ffYN\">Получить кредитную карту Монобанка</a><br><br>Учить английские слова @RepeatWordBot",
        ],
        'welcome_text' => [
            'en' => "
Hello! I can show Ukrainian exchange rates from various sources, which you can choose yourself in the settings.

Also I know how to convert currency to hryvnia in *inline* mode. Just write `@CurrencyUA_bot 1000` in any chat, and I will convert this amount at the dollar current rate! You don’t even need to open a chat with me for this. In addition, you can specify a currency, for example `@CurrencyUA_bot pln 1000`. If the currency is in the sources you selected, I will convert it!

In the chat with me you can find out the exchange rates with the buttons, which you can also choose yourself. In addition, you can write me `EUR 777`, and I will show the euro exchange rate in the amount of 777.

I also support three languages: Ukrainian, English, Russian.

If you have problems with my work - write to my creator, his contacts are in the description.
",
            'uk' => "
Вітаю! Я вмію показувати українські курси валют з різних джерел, які ви можете вибирати самостійно в налаштуваннях.

Також я вмію конвертувати валюту в гривню в режимі *інлайн*. Просто напиши `@CurrencyUA_bot 1000` в будь-якому чаті, і я конвертує цю суму за поточним курсом долару! Для цього навіть не потрібно відкривати чат зі мною. Крім цього можна вказати валюту, наприклад `@CurrencyUA_bot pln 1000`. Якщо валюта є в обраних вами джерелах, я її сконвертую!

У чаті зі мною можна дізнатися курси валют кнопками, які ти теж можешь вибирати самостійно. Крім цього ти можешь мені написати `EUR 777`, і я покажу курс євро на суму 777.

Так само я підтримую три мови: українська, англійська, російська.

Якщо у тебе будуть проблеми з моєю роботою - пиши моєму творцю, його контакти є в описі.
",
            'ru' => "
Привет! Я умею показывать украинские курсы валют из разных источников, которые вы можете выбирать самостоятельно в настройках.

Также я умею конвертировать валюту в гривну в режиме *инлайн*. Просто напиши `@CurrencyUA_bot 1000` в любом чате, и я сконвертирую эту сумму по текущему курсу доллара! Для этого даже не нужно открывать чат со мной. Кроме этого можно указать валюту, например `@CurrencyUA_bot pln 1000`. Если валюта есть в выбранных вами источниках, я ее сконвертирую!

В диалоге со мной можно узнать курсы валют кнопками, которые ты тоже можешь выбирать самостоятельно. Кроме этого ты можешь мне написать `EUR 777`, и я покажу курс по сумме 777.

Так же я поддерживаю три языка: украинский, английский, русский.

Если у тебя будут проблемы с моей работой - пиши моему создателю, его контакты есть в описании.
",
        ],
    ];

    /**
     * Get translation by default system code
     * @param string $word
     * @param string $lang
     * @return string
     */
    public function t(string $word, string $lang): string
    {
        if (!empty($this->translate[$word])) {
            return $this->translate[$word][$lang];
        }

        return 'empty';
    }

    /**
     * Get default system code by translation
     *
     * @param string $text
     * @return string|null
     */
    public function d(string $text): ?string
    {
        foreach ($this->translate as $code => $translations) {
            if (in_array($text, $translations)) {
                return $code;
            }
        }
        return null;
    }
}