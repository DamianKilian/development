<?php

declare(strict_types=1);


namespace SwagShopFinder\Storefront\Subscriber;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\System\SystemConfig\SystemConfigService;
use Shopware\Storefront\Pagelet\Footer\FooterPageletLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class FooterSubscriber implements EventSubscriberInterface
{
    private $systemConfigService;
    private $shopFinderRepository;

    public function __construct(
        SystemConfigService $systemConfigService,
        EntityRepositoryInterface $shopFinderRepository
    ) {
        $this->systemConfigService = $systemConfigService;
        $this->shopFinderRepository = $shopFinderRepository;
    }


    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * ['eventName' => 'methodName']
     *  * ['eventName' => ['methodName', $priority]]
     *  * ['eventName' => [['methodName1', $priority], ['methodName2']]]
     *
     * The code must not depend on runtime state as it will only be called at compile time.
     * All logic depending on runtime state must be put into the individual methods handling the events.
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents()
    {
        return [
            FooterPageletLoadedEvent::class => 'onFooterPageletLoaded',
        ];
    }

    public function onFooterPageletLoaded(FooterPageletLoadedEvent $event): void
    {
// dump($this->systemConfigService->get('SwagShopFinder.config.showInStoreFront'));//mydump
// dump(!$this->systemConfigService->get('SwagShopFinder.config.showInStoreFront'));//mydump
// dump($this->systemConfigService->get('SwagShopFinder.config'));//mydump
// exit();//mydump



        if (!$this->systemConfigService->get('SwagShopFinder.config.showInStoreFront')) {
// dump(1111);//mydump
// exit();//mydump

            return;
        }


        $shops = $this->fetchShops($event->getContext());


// dump($shops);//mydump
// exit();//mydump


        $event->getPagelet()->addExtension('swag_shop_finder', $shops);
    }

    public function fetchShops(Context $context)
    {
        $criteria =  new Criteria();
        $criteria->addAssociation('country');
        $criteria->addFilter(new EqualsFilter('active', 1));
        $criteria->setLimit(5);

        $shopFinderCollection = $this->shopFinderRepository->search($criteria, $context)->getEntities();
        return $shopFinderCollection;
    }
}
