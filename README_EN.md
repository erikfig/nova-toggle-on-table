# Nova toggle on table

If you want the portuguese version of the readme, click [here](./README.md) 

![On form](./index_form.gif)

![On form](./details.png)

## Installation

Install [Composer](https://getcomposer.org/).

```
composer require erikfig/nova-toggle-on-table
```

## How to use

Just add the field you want to manage:

```
use Erikfig\NovaToggleOnTable\NovaToggleOnTable;

// ...

public function fields(Request $request)
{
    return [
        ID::make()->sortable(),

        // ...

        NovaToggleOnTable::make('Active'),
    ];
}

```

You also can use the format label/label:

```
NovaToggleOnTable::make('Active', 'active')
```

## Translation

The field use the translation file in Laravel Nova, in`resources/lang/vendor/nova/en.json`, you can translate direct or creating another prefix, according to the default format of Laravel.

To translate the 'loading' text, just edit:

```
{
    // ...
    "Yes": "Yes",
    "No": "No",
    "loading": "loading",
    // ...
}
```

## Contributions

I don't expect any contributions, I had created as way of study but if you want to help, you can translate this text.

I accept all kinds of PRs and I will even be eternally grateful.
