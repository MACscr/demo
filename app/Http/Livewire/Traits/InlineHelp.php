<?php

namespace App\Http\Livewire\Traits;

use Filament\Actions\Action;
use Illuminate\Support\HtmlString;

trait InlineHelp
{
    public function renderInlineHelp(int $docId, ?string $staticDoc = null): ?Action
    {
        return ($this->inlineHelpAction)([
            'docId' => $docId,
            'staticDoc' => $staticDoc,
        ]);
    }

    public function inlineHelpAction(): Action
    {
        return Action::make('inlineHelpAction')
            ->label('Documentation')
            ->icon('heroicon-o-question-mark-circle')
            ->iconButton()
            ->slideOver()
            ->modalContent(function (array $arguments) {
                return new HtmlString($arguments['docId']);
            });
//            ->modalHeading('Documentation')
//            ->modalContent(function (array $arguments) {
//
//                $doc = Doc::find($arguments['docId']);
//                if (!$doc) {
//                    return 'Unable to find requested documentation.';
//                }
//
//                // if a staticDoc is set, use that instead of the database short_content
//                if ($arguments['staticDoc']) {
//                    $doc->short_content = view('docs.content.' . $arguments['staticDoc'])->render();
//                }
//
//                return view('docs.inlinehelp', ['doc' => $doc]);
//            })
//            ->modalActions([
//                ModalAction::make('close')
//                    ->cancel()
//                    ->button(),
//                ModalAction::make('open')
//                    ->label('Visit Full Documentation')
//                    ->url(route('docs.index'), true)
//                    ->color('secondary')
//                    ->button(),
//            ]);
    }
}
