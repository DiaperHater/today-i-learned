## Problem:
I have 2 elements ( __region-1__ and __region-2__ ) which should call _showLightbox()_ on hover.
In that scenario I'm unable to hover child element and make it call _showLightbox()_ 
because it's placed under __lightbox__ now, that was opend by __region-1__ element.

## Solution:
So lets use _setTimout()_ and _clearTimout()_ for helping us to solve this puzzle.
(see code implementation in [./main.js](./main.js))

## Key Notes:
I use '<span style="color:lightblue">mouseout</span>' event instead of <span style="color:lightblue">'mouseleave'</span> coz second one is not triggering
when mouse cursor moves from element to it's child. But '<span style="color:lightblue">mouseout</span>' fires
once cursor goes out to element's parent or child.
