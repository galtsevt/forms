# Пакет элементы Формы

Призван уменьшить количество html кода при создании форм ввода.
Не претендует на какую либо премию.
1. [ ] **`laravel 9`**

## Установка
`composer require galtsevt/forms`

## Использование

###### Input
`<x-form::input type="text" name="test" value="test" placeholder="test"/>`
###### Select
`<x-form::select name="test" labelName="select" selected="1" :data="$array"/>`
###### Textarea
`<x-form::textarea name="test" labelName="textarea" value="123" placeholder="test"/>`
###### Checkbox
`<x-form::ckeckbox name="test" labelName="ckeckbox" value="123"/>`

P.S список будет пополняться.
