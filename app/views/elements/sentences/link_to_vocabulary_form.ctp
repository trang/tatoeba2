<div ng-if="vm.isLinkToVocabDisplayed">
    <h3><?php __('Link this sentence to vocabulary item'); ?></h3>
    <md-input-container class="layout-wrap ng-scope layout-row">
        <div flex="100">
            <md-autocomplete  md-selected-item="selectedItem" md-search-text="searchText" md-items="item in link.getMatches(searchText)"
                              md-item-text="item.display" md-item-id="item.id" md-require-match="false"
                              md-floating-label="<?= __('Vocabulary') ?>"
                              md-delay="1000" >
                <span md-highlight-text="searchText">{{item.display}}</span>
            </md-autocomplete>
        </div>
        <div flex="80">
            <ng-messages for="form.$error" style="color:maroon" role="alert" md-auto-hide="false">
                <ng-message when="ajaxErr">             <?php __('Unknown AJAX error occured'); ?></ng-message>
                <ng-message when="alreadyAssociated">   <?php __('The sentence is already associated with this vocabulary item'); ?></ng-message>
            </ng-messages>

        </div>
    </md-input-container>

    <div layout="row" layout-align="end center">
        <md-button class="md-raised" ng-click="vm.hideLinkToVocabForm()">
            Cancel
        </md-button>
        <button class="md-raised md-primary md-button md-ink-ripple"
                ng-click="vm.linkCurrent()" type="submit"
                ng-disabled="ajaxUnderway" aria-label="Link">
            <span class="ng-scope"><?php __('Link'); ?></span>
        </button>
    </div>
</div>